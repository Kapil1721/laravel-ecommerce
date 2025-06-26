<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddresses extends Model
{
    protected $table = 'shipping_addresses';

    protected $fillable = [
        'order_id',
        'fname',
        'lname',
        'phone',
        'telcode',
        'country_id',
        'city',
        'zone_id',
        'postal_code'
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'order_id', 'id');
    }

    public function countries()
    {
        return $this->hasMany(Country::class, 'country_id', 'id');
    }

    public function zones()
    {
        return $this->hasMany(Zone::class, 'zone_id', 'id');
    }
}
