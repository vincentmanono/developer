<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded=[];

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
}
