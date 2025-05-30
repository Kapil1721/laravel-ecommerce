<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentMedia extends Model
{
    protected $fillable = [
        'comment_id',
        'file',
        'title',
        'alt',
        'extension',
        'type',
        'size',
    ];

    public function comment(): BelongsTo
    {
        return $this->belongsTo(ProductComment::class, 'comment_id');
    }
}
