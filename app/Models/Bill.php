<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;
use App\User;
class Bill extends Model
{
    protected $filliable = ['user_id','date'];

    public function details(){
        return $this->hasMany(Detail::class);
    }
    
    public function users(){
        return $this->belongsTo(User::class);
    }
}
