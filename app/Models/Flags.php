<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flags extends Model
{
    //

    protected $fillable = [
        'comment_id',
        'customer_id',
        'reason',
    ];

    public function comment()
    {
        return $this->belongsTo(ProductComment::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
