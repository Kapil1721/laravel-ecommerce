<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    protected $fillable = [
        'id',
        'customer_id',
        'sub_total',
        'discount_id',
        'discount_amount',
        'grand_total',
        'payment_method',
        'transaction_id',
        'is_paid',
        'status',
        'shipping_status',
        'estimated_delivery',
        'address',
        'delivered_at'
    ];

    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id', 'id');
    }

    public function discount()
    {
        return $this->hasMany(Discounts::class, 'discount_id', 'id');
    }
    public function order_items()
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }
    public function shipping_address()
    {
        return $this->hasOne(ShippingAddresses::class, 'order_id', 'id');
    }

    public function billing_address()
    {
        return $this->hasOne(BillingAddresses::class, 'order_id', 'id');
    }
}
