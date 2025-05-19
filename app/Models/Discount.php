<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'type',
        'method',
        'code',
        'title',
        'discount_type',
        'amount',
        'applies_to',
        'requirement',
        'min_amount',
        'min_qty',
        'buys',
        'gets_qty',
        'gets_applies_to',
        'eligibility',
        'total_usage',
        'once_per_customer',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
    ];
    protected $casts = [
        'type' => 'enum:fixed,percentage',
        'method' => 'enum:code,automatic',
        'discount_type' => 'enum:fixed,percentage,free',
        'amount' => 'decimal:2',
        'applies_to' => 'enum:collections,products',
        'requirement' => 'enum:no_minimum_requirements,minimum_quantity_items,minimum_purchase_amount',
        'min_amount' => 'decimal:2',
        'min_qty' => 'integer',
        'buys' => 'enum:minimum_quantity_items,minimum_purchase_amount',
        'gets_qty' => 'integer',
        'gets_applies_to' => 'enum:collections,products',
        'eligibility' => 'enum:all_customers,specific_customers',
        'total_usage' => 'integer',
        'once_per_customer' => 'boolean',
        'start_date' => 'date',
        'start_time' => 'time',
        'end_date' => 'date',
        'end_time' => 'time',
    ];
    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'collection_discount', 'discount_id', 'collection_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'discount_product', 'discount_id', 'product_id');
    }
    public function gets_collections()
    {
        return $this->belongsToMany(Collection::class, 'discount_gets_collections', 'discount_id', 'collection_id');
    }
    public function gets_products()
    {
        return $this->belongsToMany(Product::class, 'discount_gets_products', 'discount_id', 'product_id');
    }
    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_discount', 'discount_id', 'customer_id');
    }
}
