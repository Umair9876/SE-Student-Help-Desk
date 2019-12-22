<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagesDescription extends Model
{
    protected $fillable=['file_url','des_topic'];
//    protected $table = "pages_descriptions";
    public function course(){
        return $this->belongsTo('App\Course');
    }
//    public function user1()
//    {
//        return $this->belongsTo('App\User');
//    }
public function users()
{
    return $this->belongsTo('App\User');
}



}
