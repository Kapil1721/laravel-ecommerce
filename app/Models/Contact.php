<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['created_at','updated_at', 'name', 'email', 'message', 'facebook', 'twitter', 'youtube', 'instagram'];

}
