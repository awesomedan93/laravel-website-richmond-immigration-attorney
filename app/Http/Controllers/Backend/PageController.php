<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{

    public function edit($key)
    {
        $page = Page::where('key', $key)->firstOrFail();

        return view('backend.pages.seo.edit')->with('page',$page);
    }

    public function update(Request $request, $id)
    {
        dd(22);
        $this->validate($request, [
            'title_en' => 'required',
            'slug_en' => 'required|unique:post_translations,slug,' . $id,
            'slug_es' => 'unique:post_translations,slug,' . $id,
            'published_at' => 'required',
            'active' => 'required',
            'body_en' => 'required'
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

        $post = Post::find($id);

        $updated = $post->update([
            'published_at'=>$inputData['published_at'],
            'author_id'=>$inputData['author_id'],
            'active'=>$inputData['active'],
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

}
