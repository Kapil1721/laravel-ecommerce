<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\Log;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'products', 'status', 'type', 'match', 'media_id', 'meta_title', 'meta_description', 'meta_keywords'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_collections', 'collection_id', 'product_id');
    }

    public function collection_conditions()
    {
        return $this->hasMany(CollectionCondition::class, 'collection_id', 'id');
    }

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
    public function syncProducts()
    {
        if ($this->type === 'smart') {
            $matchType = $this->match === 'all' ? 'and' : 'or';

            $products = Product::where(function ($query) use ($matchType) {
                foreach ($this->collection_conditions as $index => $condition) {
                    $column = $condition->column_condition->name;
                    $value = $condition->value;
                    $operator = $this->getSqlOperator($condition->condition->slug, $value);

                    $callback = function ($subQuery) use ($condition, $column, $operator, $value) {
                        $this->addIntoQuery($subQuery, $column, $operator['op'], $operator['val']);
                    };

                    if ($matchType === 'and') {
                        $query->where($callback);
                    } else {
                        $query->orWhere($callback);
                    }
                }
            })->get();

            $this->products()->sync($products->pluck('id')->toArray());
        }
    }
    private function addIntoQuery($query, $column, $operator, $value)
    {
        if ($column === 'category') {
            return $query->whereHas('category', function ($query) use ($operator, $value) {
                $query->where('name', $operator, $value);
            });
        } elseif ($column === 'variant') {
            return $query->whereHas('inventories', function ($query) use ($operator, $value) {
                $query->where(function ($query) use ($operator, $value) {
                    $query->whereRaw("JSON_SEARCH(variants, 'all', ?, null, '$[*].name') IS NOT NULL", [$value])
                        ->orWhereRaw("JSON_SEARCH(variants, 'all', ?, null, '$[*].type') IS NOT NULL", [$value])
                        ->orWhereRaw("JSON_SEARCH(variants, 'all', ?, null, '$[*].value') IS NOT NULL", [$value]);
                });
            });
        }

        return $query->where($column, $operator, $value);
    }
    private function getSqlOperator($slug, $value)
    {
        return match ($slug) {
            'is-equal-to' => ['op' => '=', 'val' => $value],
            'is-not-equal-to' => ['op' => '!=', 'val' => $value],
            'starts-with' => ['op' => 'like', 'val' => "{$value}%"],
            'ends-with' => ['op' => 'like', 'val' => "%{$value}"],
            'contains' => ['op' => 'like', 'val' => "%{$value}%"],
            'does-not-contain' => ['op' => 'not like', 'val' => "%{$value}%"],
            'is-greater-than' => ['op' => '>', 'val' => $value],
            'is-less-than' => ['op' => '<', 'val' => $value],
            'is-not-empty' => ['op' => '!=', 'val' => ''],
            'is-empty' => ['op' => '=', 'val' => ''],
            default => ['op' => '=', 'val' => $value],
        };
    }
}


