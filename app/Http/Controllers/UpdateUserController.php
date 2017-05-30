<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UpdateUserController extends Controller
{
	public function index(){
			
    return view('front.updateUser');
}

   public function edit(Request $request,$id) {
      $name = $request->input('name') ;
      $password  = $request->input('password') ;

      	\DB::update('update student set name = ? where id = ?',[$name,$id]) ;
      	\DB::update('update student set password = ? where id = ?',[$password,$id]) ;
      return redirect('/dadesUsuari');
   }


   public function store(Request $request)
	{
		$id = $request->id;
		$password =  $request->password;

	    $user = User::find($id);
	    $user->name = $request->name;
	    if ($password != null || $password != ''){
	    	$user->password = $password;
	    }
	    
	   
	    $user->save();
	    return redirect('dadesUsuari');
	    
	}
}
