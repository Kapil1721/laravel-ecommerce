<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['id','code', 'discount_type', 'discount_value', 'usage_limit', 'used_count', 'expires_at','created_at', 'updated_at'];
}
