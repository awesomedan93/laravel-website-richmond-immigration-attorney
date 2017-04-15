<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
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
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'published_at' => 'required',
            'active' => 'required',
            'body' => 'required'
        ]);

        $inputData = $request->all();

        $inputData['author_id'] = Auth::user()->id;

        $date = \DateTime::createFromFormat('m/d/Y', $inputData['published_at']);
        $inputData['published_at'] = $date->format('Y-m-d');

        $post = new Post();

        $post->fill($inputData);
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
            $inputData['image'] = "postspics/$post->id/".$filename;
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
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $id,
            'published_at' => 'required',
            'active' => 'required',
            'body' => 'required'
        ]);

        $inputData = $request->all();

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

        $updated = Post::find($id)->update($inputData);

        if($updated){
            return redirect()->route('blog.index');
        }else{
            return redirect()->back()->withInput();
        }
    }

    public function destroy($slug)
    {
        try {
            Post::where('slug', $slug)->delete();

            return response()->json('',200);
        }
        catch (\Exception $e) {

            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 403 );
        }
    }

}
