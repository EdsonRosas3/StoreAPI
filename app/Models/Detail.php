<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Bill;
class Detail extends Model
{
    protected $filliable = ['bill_id','product_id','quantity','price'];

    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function bills(){
        return $this->belongsTo(Bill::class);
    }
}
