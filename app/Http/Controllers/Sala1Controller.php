<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Comment;

class Sala1Controller extends Controller
{
     public function index(Request $request)
    {
        $rooms = Room::all();
        $comments = Comment::all();

        //Crido a la vista
        return view('front.sala1', compact('rooms', 'comments'));
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'comment' => 'required|max:350',
            'stars' => 'required|max:1',
            
        ]);
    }
        public function create(){
    	return \View::make('front/sala1');
    }
    	public function store(Request $request)
	{
	    $comment = new Comment;
	    $comment->comment = $request->comment;
	    $comment->user_id = $request->user_id;
	    $comment->room_id = $request->room_id;
	    $comment->stars = $request->stars;
	    $comment->save();
	    return redirect('sala1');
	}


}
