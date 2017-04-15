<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->where('active','=','1');
        return view('frontend.blog')->with('posts',$posts);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('active', 1)
            ->firstOrFail();

        $oldPublishedDate = strtotime($post->published_at);
        $publishedAt = date('M d, Y', $oldPublishedDate);

        return view('frontend.blog_article')->with(['post'=>$post,'publishedAt'=>$publishedAt]);
    }
}
