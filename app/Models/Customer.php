<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Customer extends Authenticatable implements MustVerifyEmail, CanResetPasswordContract
{
    use HasApiTokens, Notifiable, CanResetPassword;
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \App\Notifications\CustomerResetPasswordNotification($token));
    }
    protected $fillable = ['fname', 'lname', 'email', 'password', 'country_id', 'telcode', 'phone', 'status', 'created_at', 'updated_at', 'address_id'];

    protected $hidden = ['password', 'remember_token'];
    protected $appends = ['full_name'];

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    protected function casts(): array
    {
        return ['email_verified_at' => 'datetime', 'password' => 'hashed'];
    }

    public function addresses()
    {
        return $this->hasMany(CustomerAddress::class, 'customer_id');
    }
    public function address() {
        return $this->belongsTo(CustomerAddress::class, 'address_id') ?? $this->addresses()->first();
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function discounts()
    {
        return $this->belongsTo(Discounts::class, 'discount_customers', 'customer_id', 'discount_id');
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'customer_id');
    }
}