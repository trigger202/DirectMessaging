<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Message;



class Conversation extends Model
{
    //



    public function Messages()
    {
    	return $this->belongsToMany('App\Message');
    }

}
