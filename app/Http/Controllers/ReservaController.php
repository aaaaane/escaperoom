<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Booking;

class ReservaController extends Controller
{
    public function index()
    {
      
        return view('front.reserva');
    }


    
        public function create(){
    	return \View::make('front/reserva');
    }

     protected function validator(array $data)
    {
        return Validator::make($data, [
           'name_user' => 'required|max:50',
            'email' => 'required|max:50',
            'room_id' => 'required|max:2',
            'phone' => 'required|max:13',
            'DNI' => 'required|max:14',
            'numpeople' => 'required|max:2',
            'amount' => 'required|max:3',
            
        ]);
    }

  public function store(Request $request)
	{
		
	    $booking = new Booking;
	    $booking->name_user = $request->name_user;
	    $booking->user_id = $request->user_id;
	    $booking->email = $request->email;
	    $booking->phone = $request->phone;
	    $booking->country = $request->country;
	    $booking->numpeople = $request->numpeople;
	    $booking->date = $request->date;
	    $booking->amount = $request->amount;
	    $booking->room_id = $request->room_id;
	    $booking->save();
	    return redirect('veureReserves');
	    
	}
	 public function __construct()
    {
        $this->middleware('auth');
    }  

}
