<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_id','name', 'slug', 'description', 'price', 'stock', 'image', 'status', 'created_at', 'updated_at'];
    // protected $casts = ['tags' => 'array'];
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function carts()
{
    return $this->hasMany(Cart::class);
}
}
