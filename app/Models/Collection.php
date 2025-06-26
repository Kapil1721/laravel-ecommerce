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



    public function discounts()
    {
        return $this->belongsToMany(Discounts::class, 'discount_collections', 'collection_id', 'discount_id');
    }

    public function getDiscounts()
    {
        return $this->belongsToMany(Discounts::class, 'discount_get_collections', 'collection_id', 'discount_id');
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
        switch ($slug) {
            case 'is-equal-to':
                return ['op' => '=', 'val' => $value];
            case 'is-not-equal-to':
                return ['op' => '!=', 'val' => $value];
            case 'starts-with':
                return ['op' => 'like', 'val' => "{$value}%"];
            case 'ends-with':
                return ['op' => 'like', 'val' => "%{$value}"];
            case 'contains':
                return ['op' => 'like', 'val' => "%{$value}%"];
            case 'does-not-contain':
                return ['op' => 'not like', 'val' => "%{$value}%"];
            case 'is-greater-than':
                return ['op' => '>', 'val' => $value];
            case 'is-less-than':
                return ['op' => '<', 'val' => $value];
            case 'is-not-empty':
                return ['op' => '!=', 'val' => ''];
            case 'is-empty':
                return ['op' => '=', 'val' => ''];
            default:
                return ['op' => '=', 'val' => $value];
        }
    }
}
