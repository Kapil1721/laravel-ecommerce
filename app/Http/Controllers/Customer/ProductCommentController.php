<?php

namespace App\Http\Controllers\Customer;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductComment;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info('Fetch All Comments');
        $comments = ProductComment::with('media')->get(); // eager load media
        return response()->json($comments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'status' => 'required|in:pending,approved,rejected,spam',
            'media' => 'nullable|array',

        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        try {
            Log::info('Store Product Comment', $request->all());

            $comment = ProductComment::create([
                'product_id' => $request->product_id,
                'customer_id' => $request->customer_id,
                'title' => $request->title,
                'message' => $request->message,
                'rating' => $request->rating,
                'name' => $request->name,
                'email' => $request->email,
                'status' => $request->status ?? 'pending'

            ]);

            if ($request->has('media')) {
                $comment->media()->sync($request->media);
            }

            return response()->json($comment->load('media'), 201);
        } catch (Exception $e) {
            Log::error('Error storing product comment: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to store comment'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = ProductComment::with('media')->findOrFail($id);
        return response()->json($comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Placeholder for future update logic
        $validator = Validator::make($request->all(), [
            'title' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'status' => 'nullable|in:pending,approved,rejected,spam',
            'media' => 'nullable|array',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        try {
            $comment = ProductComment::findOrFail($id);
            $comment->update($request->only(['title', 'message', 'rating', 'name', 'email', 'status']));

            if ($request->has('media')) {
                $comment->media()->sync($request->media);
            }

            return response()->json($comment->load('media'), 200);
        } catch (Exception $e) {
            Log::error('Error updating product comment: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to update comment'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Placeholder for future delete logic
        $remove = ProductComment::destroy($id);
        Log::info('Deleted Product Comment ID: ' . $id);

        return response()->json(['message' => 'Product Comment deleted successfully'], 200);
    }
}
