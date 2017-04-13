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
        return view('backend.pages.blog.posts');
    }

    public function create()
    {
        return view('backend.pages.blog.create_post');
    }

    public function store(Request $request)
    {

//        $this->validate($request, [
//            'name' => 'required',
//            'phone' => 'required',
//            'email' => 'required|email'
//        ]);

        $inputData = $request->all();
        $inputData['author_id'] = Auth::user()->id;
        $inputData['slug'] = str_slug($inputData['title'],'-');
        $post = new Post();

        $post->fill($inputData);
        $saved = $post->save();

        if($saved){
            return redirect()->route('blog.index');
        }

    }
}
