<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductComment extends Model
{
    protected $fillable = [
        'product_id',
        'customer_id',
        'title',
        'message',
        'rating',
        'name',
        'email',
        'status'
    ];

    public function media(): BelongsToMany
    {
        return $this->belongsToMany(OtherMedia::class, 'comment_media', 'comment_id', 'media_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    public function flags(): HasMany
    {
        return $this->hasMany(Flags::class, 'comment_id');
    }
    public function likes(): HasMany
    {
        return $this->hasMany(ProductLike::class, 'comment_id');
    }
}