<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id', 
        'product_id', 
        'quantity',
        'created_at', 
        'updated_at', 
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Cart belongs to a Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
     

