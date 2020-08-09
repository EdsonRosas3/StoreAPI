<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Detail;

class Product extends Model
{
    protected $filliable = ['name','price','stock','category_id'];

    public function categorys(){
        return $this->belongsTo(Category::class);
    }
    public function details(){
        return $this->hasMany(Detail::class);
    }
}
