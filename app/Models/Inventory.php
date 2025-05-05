<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = ['id','price','compare_at_price', 'cost_per_item','profit', 'margin', 'product_id', 'margin', 'qty', 'sku', 'barcode', 'track_quantity', 'continue_when_oos'];
   
    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function variations() {
        return $this->belongsToMany(Variant::class, 'inventory_variations', 'inventory_id', 'variant_id')->withPivot('value');
    }
    protected $appends = ['variants'];
    protected $hidden = ['variations'];

    public function getVariantsAttribute()
    {
        return $this->variations->map(function ($variant) {
            $pivotValue = strtolower(trim($variant->pivot->value));
            $matched = collect($variant->value)->first(function ($item) use ($pivotValue) {
                return strtolower($item['name']) === $pivotValue || strtolower($item['value']) === $pivotValue;
            });

            if (!$matched) {
                return null;
            }

            return [
                'id' => $variant->id,
                'name' => $variant->name,
                'matched_name' => $matched['name'],
                'matched_value' => $matched['value'],
            ];
        })->filter()->values();
    }


    
}

