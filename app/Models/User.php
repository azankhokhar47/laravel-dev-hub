<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;

class User extends Model
{
    use HasFactory;
 
    public function post(){
        return $this->hasMany(Post::class);
    }

    public function scopeActive($query){
        return $query->where('status',1);
    }

    public function scopeCity($query, $cityName){
        return $query->where('city',$cityName);
    }

    public function scopeSort($query){
        return $query->orderBy('name','asc');
    }
    // protected static function booted() : void{
    //     static::deleted(function($user){
    //         $user->post()->delete();
    //     });

    //     static::created(function($user){
             
    //     });

    // }
}
