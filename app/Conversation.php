<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Message;



class Conversation extends Model
{
    //



    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function messages()
    {

    	return $this->hasMany('App\Message');

    }
}
