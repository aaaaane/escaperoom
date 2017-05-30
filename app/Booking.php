<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

	protected $fillable = [
        'name_user', 'room_id', 'email', 'phone', 'country', 'numpeople', 'amount', 'user_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function room(){
    	return $this->belongsTo('App\Room');
    }

}
