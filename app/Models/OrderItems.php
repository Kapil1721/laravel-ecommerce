<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = ['id', 'order_id', 'product_id', 'inventory_id', 'price', 'qty', 'sub_total', 'created_at', 'updated_at'];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'order_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'inventory_id', 'id');
    }
}
