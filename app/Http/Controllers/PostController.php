<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(){

        $posts = Cache::rememberForever('posts', function(){
            return Post::all();
        });

        return view('welcome', compact('posts'));
    }
}
