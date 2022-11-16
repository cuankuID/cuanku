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
        
        if($request->file('cover')){
            $coverName = $request->file('cover')->store('post-images');
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

    public function show($id)
    {
        return Post::with('user')->where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $article = Post::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image_post' => 'mimes:jpeg,png,svg,jpg',
            'body' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $coverName = $article->cover;
        
        if($request->file('cover')){
            Storage::delete($article->cover);
            $coverName = $request->file('cover')->store('post-images');
        }

        $article->update([
            'title' => $request->title,
            'image_post' => $coverName,
            'body' => $request->desc,
        ]);

        return response()->json(['message' => 'Article Updated Successfully']);
    }

    public function destroy($id)
    {
        $article = Article::Find($id);
        if ($article->cover) {
            Storage::delete($article->cover);    
        }
        $article->delete();
        return response()->json(['message' => 'Article Deleted Successfully']);
    }
}
