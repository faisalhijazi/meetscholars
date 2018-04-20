<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';


    protected $fillable = [
      'phone','country' ,'about'
    ];


    public function user(){
      return $this->belongsTo('App\User');
    }


}
