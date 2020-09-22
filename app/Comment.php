<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable= [
        'name','blog_id','email','body'
    ];

    public function blog(){
        return $this->belongsTo('App\Blog');
    }
}
