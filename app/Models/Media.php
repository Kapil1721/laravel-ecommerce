<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['file', 'title', 'type', 'size', 'extension', 'alt'];
    // protected $casts = ['tags' => 'array'];
    // public function category() {
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }

    protected $appends = ['full_path'];
    public function getFullPathAttribute()
    {
        return asset("uploads/{$this->file}");
    }
}



