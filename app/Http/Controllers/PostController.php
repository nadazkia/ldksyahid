<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog | LDK Syahid",
            "active" => "blog",
            "body_class" => "bg-light",
            "post" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "body_class" => "bg-light",
            "active" => "",
            "post" => Post::find($slug)
        ]);
    }
}
