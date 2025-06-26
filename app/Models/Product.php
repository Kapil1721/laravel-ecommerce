<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'short_description',
        'long_description',
        'sale_price',
        'actual_price',
        'track_stock',
        'stock',
        'continue_when_oos',
        'if_sku',
        'sku',
        'barcode',
        'shipping',
        'weight',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug',
        'status',
        'product_type'
    ];
    // protected $casts = ['tags' => 'array'];

    protected $appends = ['first_media', 'second_media', 'inventory'];

    public function getFirstMediaAttribute()
    {
        return $this->media()->first() ?? null;
    }
    public function getSecondMediaAttribute()
    {
        return $this->media()->skip(1)->first() ?? $this->first_media;
    }
    public function getInventoryAttribute()
    {
        return $this->inventories()->where('qty', '>', 0)->first() ?? null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function getVariantsAttribute()
    {
        return $this->category ? $this->category->variants : collect();
    }
    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'product_id', 'id');
    }
    public function media()
    {
        return $this->belongsToMany(Media::class, 'product_media', 'product_id', 'media_id');
    }

    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'product_collections', 'product_id', 'collection_id');
    }

    public function discounts()
    {
        return $this->belongsToMany(Discounts::class, 'discount_products', 'product_id', 'discount_id')->withPivot('inventories');
    }

    public function getDiscounts()
    {
        return $this->belongsTo(Discounts::class, 'discount_get_products', 'product_id', 'discount_id');
    }

    public function order_items()
    {
        return $this->belongsto(OrderItems::class, 'product_id', 'id');
    }
}
