<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function semester()
    {
        $this->belongsTo('App\Semester');
    }


    public function pages()
    {
        return $this->hasMany('App\PagesDescription');
}


}