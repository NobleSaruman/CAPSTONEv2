<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $post = Comment::create([
            'post_id' => $request->post_id,
            'user_id' => \Auth::user()->id,
            'comment' => $request->comment
        ]);

        return redirect(url('/post/' . $request->post_id));
    }
}
