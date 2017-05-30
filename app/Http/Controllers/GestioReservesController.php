<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;



class GestioReservesController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::all();
      
        return view('back.gestioReserves', compact('bookings'));
    }

 public function __construct()
    {
        $this->middleware('checkAdmin');
    }  

     public function destroy($id) {
      \DB::delete('delete from bookings where id = ?',[$id]) ;

      return redirect('/gestioReserves');
   }
 

}