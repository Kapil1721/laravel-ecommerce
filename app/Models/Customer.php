<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['fname', 'lname', 'email', 'password', 'country_id', 'telcode', 'phone', 'status', 'created_at', 'updated_at'];

    protected $hidden = ['password', 'remember_token'];
    protected $appends = ['full_name'];

    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    protected function casts(): array
    {
        return ['email_verified_at' => 'datetime', 'password' => 'hashed'];
    }

    public function addresses()
    {
        return $this->hasMany(CustomerAddress::class, 'customer_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
