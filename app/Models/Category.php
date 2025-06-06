<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';


    protected $fillable = ['id', 'name', 'description', 'parent_id', 'status', 'meta_title', 'meta_description', 'meta_keywords', 'slug', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'category_variants', 'category_id', 'variant_id');
    }
}