<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_id','name','short_description','long_description','sale_price','actual_price','track_stock','continue_when_oos','if_sku','sku','barcode',
    'shipping','weight','meta_title','meta_description','meta_keywords', 'slug', 'status', 'product_type'];
    // protected $casts = ['tags' => 'array'];
    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function getVariantsAttribute()
{
    return $this->category ? $this->category->variants : collect();
}

//     public function carts()
// {
//     return $this->hasMany(Cart::class);
// }
}


