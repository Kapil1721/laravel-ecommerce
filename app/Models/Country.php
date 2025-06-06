<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'code', 'flag', 'continent', 'telcode', 'postalcode', 'zone'];
    protected $appends = ['flag_url'];

    public function getFlagUrlAttribute()
    {
        return asset("images/flags/{$this->flag}");
    }

    public function zones()
    {
        return $this->hasMany(Zone::class, 'country_id');
    }

    public function discounts()
    {
        return $this->belongsToMany(Discounts::class, 'discount_countries', 'country_id', 'discount_id');
    }

    public function shipping()
    {
        return $this->belongsto(ShippingAddresses::class, 'country_id', 'id');
    }

    public function billing()
    {
        return $this->belongsTo(BillingAddresses::class, 'country_id', 'id');
    }
}
