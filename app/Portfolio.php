<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $guarded= [];

    public function clients(){
        return $this->hasMany(Client::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
