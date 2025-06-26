<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['subheading','heading', 'content', 'image', 'buttontext', 'link', 'extra1', 'extra2', 'extra3', 'extra4', 'extra5', 'extra6', 'extra7'];
    protected $casts = ['extra7' => 'array'];

    public function others(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Slider::class);
    }


}
