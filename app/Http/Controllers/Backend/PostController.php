<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $posts = Post::all()->where('active','=','1');
        return view('backend.pages.blog.posts')->with('posts',$posts);
    }

    public function create()
    {
        return view('backend.pages.blog.create_post');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'created_at' => 'required',
            'active' => 'required',
            'body' => 'required'
        ]);

        $inputData = $request->all();
        $inputData['author_id'] = Auth::user()->id;
        $inputData['slug'] = str_slug($inputData['title'],'-');
        $createdAt = $inputData['created_at'];

        $date = \DateTime::createFromFormat('m/d/Y', $createdAt);
        $inputData['created_at'] = $date->format('Y-m-d H:i:s');

        $post = new Post();

        $post->fill($inputData);
        $saved = $post->save();

        if($saved){
            return redirect()->route('blog.index');
        }

    }
}
