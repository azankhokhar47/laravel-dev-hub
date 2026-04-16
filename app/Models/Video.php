<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function latestComment(){
        return $this->morphOne(Comment::class, 'commentable')
                    ->latestOfMany();
    }

    public function BestComment(){
        return $this->morphOne(Comment::class, 'commentable')
                    ->ofMany('likes','max');
    }

    public function leastComment(){
        return $this->morphOne(Comment::class, 'commentable')
                    ->ofMany('likes','min');
    }
}
