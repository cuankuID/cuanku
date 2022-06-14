<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{   
    public function index()
    {
        return view('posts.index', [
            'active' => 'post',
            'title' => 'Posts',
            'post_categories' => Post::select('category_id')->distinct()->get(), 
            'posts' => Post::latest()->filter(request(['search', 'category']))->paginate(6)
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'active' => 'post',
            'post' => $post
        ]);
    }
}
