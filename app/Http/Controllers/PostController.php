<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(Request $request)
    {
        return Post::with('user')->where('title', 'like', '%'.$request->search.'%')->orWhere('body', 'like', '%'.$request->search.'%')->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image_post' => 'mimes:jpeg,png,svg,jpg',
            'body' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $coverName = null;
        
        if($request->file('image_post')){
            $coverName = $request->file('image_post')->store('post-images');
        }

        Post::Create([
            'title' => $request->title,
            'body' => $request->desc,
            'image_post' => $coverName,
            'user_id' => $user->id,
            'category_id' => '1',
        ]);

        return response()->json(['message' => 'Article Added Successfully']);
    }

    public function show($slug)
    {
        return Post::with('user')->where('slug', $slug)->get();
    }

    public function update(Request $request, $slug)
    {
        $article = Post::where('slug', $slug)->first();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image_post' => 'mimes:jpeg,png,svg,jpg',
            'body' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $coverName = $article->image_post;
        
        if($request->file('image_post')){
            Storage::delete($article->image_post);
            $coverName = $request->file('image_post')->store('post-images');
        }

        $article->update([
            'title' => $request->title,
            'image_post' => $coverName,
            'body' => $request->body,
        ]);

        return response()->json(['message' => 'Article Updated Successfully']);
    }

    public function destroy($slug)
    {
        $article = Post::where('slug', $slug)->first();
        if ($article->image_post) {
            Storage::delete($article->image_post);    
        }
        $article->delete();
        return response()->json(['message' => 'Article Deleted Successfully']);
    }
}
