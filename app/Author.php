<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $fillable = ['name', 'surname'];

    public function book(){
        return $this->hasMany('App\Book');
    }

}
