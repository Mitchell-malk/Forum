<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    use HasFactory;

    // 粉丝用户
    public function fuser(){
        return $this->hasOne(User::class,'id','fan_id');
    }

    // 明星用户
    public function suser(){
        return $this->hasOne(User::class,'id','star_id');
    }
}
