<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = ['id','name','value'];
    protected $casts = [
        'value' => 'array',
    ];
    public function categories() {
        return $this->belongsToMany(Category::class, 'category_variants', 'variant_id', 'category_id');
    }
}




