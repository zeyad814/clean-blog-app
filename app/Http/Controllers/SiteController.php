<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function home(){
        $posts = Post::with('user')->take(10)->get();
        return view('front.home',['posts'   => $posts]);
    }
}
