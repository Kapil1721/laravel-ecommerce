<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','url', 'category_id','image', 'image_alt', 'video_url', 'tags', 'type', 'content', 'metatitle', 'keywords', 'metadescription', 'status'];
    protected $casts = ['tags' => 'array'];
    public function category() {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    public function faqs()
    {
        return $this->hasMany(Faqs::class);
    }
}
