<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLike extends Model
{
    //
    protected $fillable = [
        'comment_id',
        'customer_id',
    ];
    public function comment()
    {
        return $this->belongsTo(ProductComment::class, 'comment_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
