<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['heading','subheading','content', 'image', 'bannerimage','sub_services','buttontext', 'link', 'meta_title', 'meta_description', 'keywords', 'url' ];
    protected $casts = ['sub_services' => 'array'];
    public function menu() {
        return $this->hasOne(Menu::class, 'service_id', 'id');
    }
}
