<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = ['id','price','compare_at_price', 'cost_per_item','profit', 'margin', 'product_id', 'margin', 'qty', 'sku', 'barcode', 'track_quantity', 'continue_when_oos'];
   
    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    
}

