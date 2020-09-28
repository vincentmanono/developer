<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Comment;
use App\User;

class Blog extends Model
{
    //
    protected $guarded= [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName()
    { 
        return 'slug';
    }

}
