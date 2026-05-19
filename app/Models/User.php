<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = [];
    
    public function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);
    }

    public function setUserNamelAttribute($value){
        $this->attributes['User_name'] = strtolower($value);
    }

    public function setPasswordlAttribute($value){
        $this->attributes[''] = strtolower($value);
    }
}
