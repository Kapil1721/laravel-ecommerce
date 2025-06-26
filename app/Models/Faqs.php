<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    protected $fillable = ['id', 'created_at','updated_at','question', 'answer','blog_id'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
