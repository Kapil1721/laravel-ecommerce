<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'total_amount', 
        'status', 
        'shipping_address', 
        'payment_method', 
        'transaction_id'
    ];

    // One-to-Many Relationship
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}