<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{

    use HasFactory;
    protected $fillable = [

        'type',
        'method',
        'code',
        'title',
        'discount_type',
        'amount',
        'applies_to',
        'collection_id',
        'product_id',
        'requirement',
        'min_amount',
        'min_qty',
        'buys',
        'gets_qty',
        'gets_applies_to',
        'gets_collection_id',
        'gets_product_id',
        'eligible_countries',
        'country_id',
        'exclude_shipping_over_an_amount',
        'shipping_amount',
        'customer_id',
        'total_usage',
        'start_date',
        'end_date',
        'active',
        'created_at',
        'updated_at',
        'once_per_customer',
        'once_per_order',
        'once_per_customer_per_order',
        'start_time',
        'end_time',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'discount_products', 'discount_id', 'product_id')->withPivot('inventories');
    }

    public function gets_products()
    {
        return $this->belongsToMany(Product::class, 'discount_get_products', 'discount_id', 'product_id')->withPivot('inventories');
    }


    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'discount_collections', 'discount_id', 'collection_id');
    }

    public function gets_collections()
    {
        return $this->belongsToMany(Collection::class, 'discount_get_collections', 'discount_id', 'collection_id');
    }


    public function countries()
    {

        return $this->belongsToMany(Country::class, 'discount_countries', 'discount_id', 'country_id');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'discount_customers', 'discount_id', 'customer_id');
    }
}
