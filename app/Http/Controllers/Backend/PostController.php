<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('backend.pages.blog.list')->with('posts',$posts);
    }

    public function create()
    {
        return view('backend.pages.blog.new');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title_en' => 'required',
            //'slug_en' => 'required|unique:posts',
            'slug_en' => 'required|unique:post_translations,slug',
            'slug_es' => 'unique:post_translations,slug',
            'published_at' => 'required',
            'active' => 'required',
            'body_en' => 'required'
        ]);

        $inputData = $request->all();
        //dd($inputData);
        $inputData['author_id'] = Auth::user()->id;

        $date = \DateTime::createFromFormat('m/d/Y', $inputData['published_at']);
        $inputData['published_at'] = $date->format('Y-m-d');

        $post = new Post();

        //$post->fill($inputData);
        $post = $post->fill([
            'published_at'=>$inputData['published_at'],
            'author_id'=>$inputData['author_id'],
            'active'=>$inputData['active'],
            'featured'=>$inputData['featured'],
            'en'  => ['slug'=>$inputData['slug_en'], 'title' => $inputData['title_en'],'body'=>$inputData['body_en']],
            'es'  => [
                'slug'  => !empty($inputData['slug_es']) ? $inputData['slug_es']:$inputData['slug_en'].'-es',
                'title' => !empty($inputData['title_es'])? $inputData['title_es']:$inputData['title_en'],
                'body'  => !empty($inputData['body_es']) ? $inputData['body_es']:$inputData['body_en']
            ],
        ]);

        $saved = $post->save();

        if ($_FILES['image']['size'] > 0 && $_FILES['image']['error'] == 0)
        {
            $image = $request->file('image');
            $filename  = 'post_image.' . $image->getClientOriginalExtension();

            if (!file_exists("postspics/$post->id")) {
                mkdir("postspics/$post->id", 0777, true);
            }
            $path = public_path("postspics/$post->id/" . $filename);

            Image::make($image->getRealPath())->resize(300, 220)->save($path);
            $imagePath = "postspics/$post->id/".$filename;
            $post->update(['image'=>$imagePath]);
        }

        if($saved){
            return redirect()->route('blog.index');
        }else{
            return redirect()->back()->withInput();
        }

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('backend.pages.blog.edit')->with('post',$post);
    }

    public function update(Request $request, $id)
    {

        $inputData = $request->all();
        $post = Post::find($id);

        $this->validate($request, [
            'title_en' => 'required',
            'slug_en' => 'required|unique:post_translations,slug,' . $post->translations->toArray()[0]['id'],
            'slug_es' => 'unique:post_translations,slug,' . $post->translations->toArray()[1]['id'],
            'published_at' => 'required',
            'active' => 'required',
            'body_en' => 'required'
        ]);



        if ($_FILES['image']['size'] > 0 && $_FILES['image']['error'] == 0)
        {
            $image = $request->file('image');
            $filename  = 'post_image.' . $image->getClientOriginalExtension();

            if (!file_exists("postspics/$id")) {
                mkdir("postspics/$id", 0777, true);
            }
            $path = public_path("postspics/$id/" . $filename);


            Image::make($image->getRealPath())->resize(300, 220)->save($path);
            $inputData['image'] = "postspics/$id/".$filename;
        }

        $inputData['author_id'] = Auth::user()->id;

        $date = \DateTime::createFromFormat('m/d/Y', $inputData['published_at']);
        $inputData['published_at'] = $date->format('Y-m-d');



        $updated = $post->update([
            'published_at'=>$inputData['published_at'],
            'author_id'=>$inputData['author_id'],
            'active'=>$inputData['active'],
            'featured'=>$inputData['featured'],
            'en'  => ['slug'=>$inputData['slug_en'], 'title' => $inputData['title_en'],'body'=>$inputData['body_en']],
            'es'  => [
                'slug'  => !empty($inputData['slug_es']) ? $inputData['slug_es']:$inputData['slug_en'],
                'title' => !empty($inputData['title_es'])? $inputData['title_es']:$inputData['title_en'],
                'body'  => !empty($inputData['body_es']) ? $inputData['body_es']:$inputData['body_en']
            ],
        ]);

        if($updated){
            return redirect()->route('blog.index');
        }else{
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            Post::where('id', $id)->delete();

            return response()->json('',200);
        }
        catch (\Exception $e) {

            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 403 );
        }
    }

}
