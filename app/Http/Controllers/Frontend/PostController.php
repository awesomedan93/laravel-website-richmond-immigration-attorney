<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\PostTranslation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostTranslation::where('locale',App::getLocale())->whereHas('post',function($q){
            $q->where('active',1);
        })->paginate(2);

        $latest = PostTranslation::where('locale',App::getLocale())->whereHas('post',function($q){
            $q->where('active',1)->orderBy('published_at', 'desc');
        })->take(2)->get();

        $featured = PostTranslation::where('locale',App::getLocale())->whereHas('post',function($q){
            $q->where('active',1)->where('featured',1)->orderBy('published_at', 'desc');
        })->take(2)->get();

        return view('frontend.blog',['posts'=>$posts,'latest'=>$latest, 'featured'=>$featured]);
    }

    public function show($slug)
    {
        $latest = PostTranslation::where('locale',App::getLocale())->whereHas('post',function($q){
            $q->where('active',1)->orderBy('published_at', 'desc');
        })->take(2)->get();

        $featured = PostTranslation::where('locale',App::getLocale())->whereHas('post',function($q){
            $q->where('active',1)->where('featured',1)->orderBy('published_at', 'desc');
        })->take(2)->get();

        $post = PostTranslation::where('locale',App::getLocale())->where('slug',$slug)->whereHas('post',function($q){
            $q->where('active',1);
        })->firstOrFail();

        $anotherLangPost = PostTranslation::where('locale',App::getLocale()=='en'?'es':'en')->where('post_id',$post->post_id)->whereHas('post',function($q){
            $q->where('active',1);
        })->firstOrFail();

        $oldPublishedDate = strtotime($post->published_at);
        $publishedAt = date('M d, Y', $oldPublishedDate);

        $segments = Request::segments();
        $translatedPostUrl = str_replace(end($segments), $anotherLangPost->slug, LaravelLocalization::getLocalizedURL(App::getLocale()=='en'?'es':'en'));

        return view('frontend.blog_article')->with([
                'post'=>$post,
                'publishedAt'=>$publishedAt,
                'anotherLangPost' => $anotherLangPost,
                'translatedPostUrl' => $translatedPostUrl,
                'latest'=>$latest,
                'featured'=>$featured
            ]);
    }
}
