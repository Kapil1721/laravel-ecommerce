<?php

namespace App\Http\Controllers\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        Log::info('Login attempt', $request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::guard('customer')->attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $customer = Auth::guard('customer')->user();

        if (!$customer->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email not verified',
                'verification_required' => true
            ], 403);
        }

        return response()->json([
            'token' => $customer->createToken('customer-token')->plainTextToken,
            'user' => $customer
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $customer = Customer::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Trigger the Registered event which sends the verification email
        event(new Registered($customer));

        Auth::guard('customer')->login($customer);
        // Don't automatically log in the user, they need to verify their email first
        return response()->json([
            'message' => 'Registration successful. Please check your email to verify your account.',
            'user' => $customer,
            'token' => $customer->createToken('customer-token')->plainTextToken
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }

    public function resendVerificationEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email already verified'], 200);
        }

        $request->user()->sendEmailVerificationNotification();

        return response()->json(['message' => 'Verification link sent!'], 200);
    }

    /*public function verify(Request $request, $id, $hash)
    {
        $user = Customer::findOrFail($id);

        if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            return response()->json(['message' => 'Invalid verification link'], 403);
        }

        if ($user->hasVerifiedEmail()) {
            return response()->json(['message' => 'Email already verified'], 200);
        }

        if ($user->markEmailAsVerified()) {
            event(new \Illuminate\Auth\Events\Verified($user));
        }

        return response()->json(['message' => 'Email has been verified'], 200);
         // Redirect to frontend verification page with all query parameters
        $queryParams = $request->query();
        $queryString = http_build_query($queryParams);

        return redirect(
            env('FRONTEND_URL', 'http://127.0.0.1:3000') .
            "/account/verify-email/{$id}/{$hash}" .
            ($queryString ? "?{$queryString}" : '')
        );
    }*/
    public function verify(Request $request, $id, $hash)
    {
        try {
            $user = Customer::findOrFail($id);

            // Check if verification link is valid
            if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
                return redirect(
                    env('FRONTEND_URL', 'http://127.0.0.1:3000') .
                    "/account/verify-email/error?message=" . urlencode('Invalid verification link')
                );
            }

            // Check if email is already verified
            if ($user->hasVerifiedEmail()) {
                return redirect(
                    env('FRONTEND_URL', 'http://127.0.0.1:3000') .
                    "/account/verify-email?message=" . urlencode('Email already verified')
                );
            }

            // Mark email as verified and store timestamp
            if ($user->markEmailAsVerified()) {
                event(new \Illuminate\Auth\Events\Verified($user));

                // Update email_verified_at timestamp
                $user->email_verified_at = now();
                $user->save();

                return redirect(
                    env('FRONTEND_URL', 'http://127.0.0.1:3000') .
                    "/account/verify-email?message=" . urlencode('Email has been verified successfully')
                );
            }

            return redirect(
                env('FRONTEND_URL', 'http://127.0.0.1:3000') .
                "/account/verify-email?message=" . urlencode('Verification failed')
            );

        } catch (\Exception $e) {
            return redirect(
                env('FRONTEND_URL', 'http://127.0.0.1:3000') .
                "/account/verify-email?message=" . urlencode('Verification failed: ' . $e->getMessage())
            );
        }
    }

    public function verificationStatus(Request $request)
    {
        return response()->json([
            'verified' => $request->user()->hasVerifiedEmail(),
            'email' => $request->user()->email
        ]);
    }
    /**
     * Send a password reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $customer = Customer::where('email', $request->email)->first();

        if (!$customer) {
            return response()->json([
                'message' => 'We could not find a user with that email address.'
            ], 404);
        }

        // Generate a new reset password token
        $token = Password::broker('customers')->createToken($customer);

        // Send the password reset email
        $customer->sendPasswordResetNotification($token);

        return response()->json([
            'message' => 'Password reset link sent to your email.'
        ]);
    }

    /**
     * Reset the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create an array with the correct field names for the Password broker
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
            'token' => $request->token,
        ];

        $status = Password::broker('customers')->reset(
            $credentials,
            function ($customer, $password) {
                $customer->password = Hash::make($password);
                $customer->save();
            }
        );
        \Log::info($status);
        if ($status == Password::PASSWORD_RESET) {
            return response()->json([
                'message' => 'Password has been reset successfully.'
            ]);
        }

        return response()->json([
            'message' => 'Invalid token or email.',
            'errors' => ['email' => ['The provided credentials are incorrect.']]
        ], 400);
    }
}
