<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $table = 'customer_addresses';
    protected $fillable = ['customer_id', 'country_id', 'fname', 'lname', 'company', 'address_1', 'address_2', 'city', 'zone_id', 'postalcode', 'telcode', 'phone'];
    protected $appends = ['full_name', 'default'];

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id');
    }
    public function getDefaultAttribute()
    {
        return $this->hasOne(Customer::class, 'address_id', 'id')->exists();
    }
}
