<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //TODO: Example only
    public function index()
    {
        $data = [
            'users' => User::all(),
            'posts' => Post::all()
        ];

        return view('home', $data);
    }

    public function category(Request $request)
    {
        $filter = Category::where('name', $request->category)->first()->id;
        $data = [
            'users' => User::all(),
            'posts' => Post::where('category_id', $filter)->get()
        ];

        return view('home', $data);
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id'
        ]);

        User::create([
            'name' => $request->name
        ]);

    }
}
