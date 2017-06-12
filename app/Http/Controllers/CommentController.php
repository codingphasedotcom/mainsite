<?php

namespace App\Http\Controllers;
use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;

        $this->validate($request, [
        'description' => 'required'
        ]);

        $comment->description = request('description');
        $comment->post_id =  request('pi');
        $comment->user_id =  Auth::user()->id;

        $comment->save();

        return back();
    }
}
