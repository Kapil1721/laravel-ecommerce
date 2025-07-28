<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = ['id', 'order_id', 'product_id', 'inventory_id', 'price', 'qty', 'sub_total', 'created_at', 'updated_at'];

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id', 'id');
    }
}
