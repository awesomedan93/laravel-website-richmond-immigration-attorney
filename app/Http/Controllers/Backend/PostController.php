<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.pages.blog.posts');
    }

    public function create()
    {
        return view('backend.pages.blog.posts');
    }
}
