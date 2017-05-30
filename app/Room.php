<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function comments(){
    	return $this->belongsToMany('App\Comment');
    }

    public function bookings(){
    	return $this->belongsToMany('App\Booking');
    }
}
