<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function media(): HasMany
    {
        return $this->hasMany(CommentMedia::class, 'comment_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
