<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAddresses extends Model
{
    protected $table = 'billing_addresses';

    protected $fillable = [
        'order_id',
        'fname',
        'lname',
        'phone',
        'telcode',
        'country_id',
        'city',
        'zone_id',
        'postal_code',
        'address_1',
        'address_2'
    ];
    protected $appends = ['full_name'];

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id', 'id');
    }
}
