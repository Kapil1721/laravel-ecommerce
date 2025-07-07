<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherMedia extends Model
{
    //
    protected $table = 'other_media';
    protected $fillable = [
        'file',
        'title',
        'alt',
        'extension',
        'size',
        'path',
        'type',
    ];

    public function comment()
    {
        return $this->hasMany(ProductComment::class);
    }
}