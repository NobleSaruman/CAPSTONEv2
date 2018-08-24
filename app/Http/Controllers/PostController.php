<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\File;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function show(Post $post)
    {

    }

    public function create()
    {
        $data = [
            'categories' => Category::all()
        ];

        return view('create_post', $data);
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => \Auth::user()->id
        ]);

        // Upload Files
        if($request->hasFile('attachments')) {
            foreach($request->file('attachments') as $file) {
                $original_file_name = $file->getClientOriginalName();

                $file_object = File::create([
                    'name' => pathinfo($original_file_name, PATHINFO_FILENAME),
                    'extension' => pathinfo($original_file_name, PATHINFO_EXTENSION)
                ]);

                $post->files()->attach($file_object->id);

                $file->storeAs('public', $file_object->id);
            }
        }

        return redirect(url('/'));
    }
}
