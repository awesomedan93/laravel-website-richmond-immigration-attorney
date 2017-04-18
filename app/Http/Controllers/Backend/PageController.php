<?php

namespace App\Http\Controllers\Backend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function edit($key)
    {
        $page = Page::where('key', $key)->firstOrFail();

        return view('backend.pages.seo.edit')->with('page',$page);
    }

    public function update(Request $request, $key)
    {

        $inputData = $request->except(['_token']);

        $updated = Page::where('key',$key)->update($inputData);

        if($updated){
            return back();
        }else{
            return back();
        }
    }

}
