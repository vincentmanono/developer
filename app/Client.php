<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded=[];

    public function portfolio(){
        return $this->belongsTo(Portfolio::class);
    }
}
