<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Post::paginate(9);
        return view('main.index', compact('posts'));
    }
}
