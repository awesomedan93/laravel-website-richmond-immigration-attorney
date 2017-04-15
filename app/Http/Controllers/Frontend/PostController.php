<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all()->where('active','=','1');
        $posts = Post::whereHas('translations',function ($query) {
            //$query->where('locale',App::getLocale());
        })->get();
        dd($posts->toArray());
        return view('frontend.blog')->with('posts',$posts);
    }

    public function show($slug)
    {

        $post = Post::whereHas('translations',function ($query) use($slug) {
            $query->where('slug', $slug)->where('locale',App::getLocale());
        })->firstOrFail();

        $oldPublishedDate = strtotime($post->published_at);
        $publishedAt = date('M d, Y', $oldPublishedDate);

        return view('frontend.blog_article')->with(['post'=>$post,'publishedAt'=>$publishedAt]);
    }
}
