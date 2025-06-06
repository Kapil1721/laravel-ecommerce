<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['country_id', 'name', 'code'];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function shippingAddresses()
    {
        return $this->belongsTo(ShippingAddresses::class, 'zone_id', 'id');
    }

    public function billingAddresses()
    {
        return $this->belongsTo(BillingAddresses::class, 'zone_id', 'id');
    }
}
