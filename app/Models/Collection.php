<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\Log;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['name','description', 'products', 'status', 'type', 'media_id', 'meta_title', 'meta_description', 'meta_keywords'];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_collections', 'collection_id', 'product_id');
    }

    public function column_conditions()
    {
        return $this->belongsToMany(ColumnCondition::class, 'collection_column_conditions', 'collection_id', 'column_condition_id');
    }

    public function media() {
        return $this->belongsTo(Media::class);
    }

}


