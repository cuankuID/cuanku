<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index(Request $request)
    {
        return Article::with('user')->where('title', 'like', '%'.$request->search.'%')->orWhere('desc', 'like', '%'.$request->search.'%')->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'cover' => 'mimes:jpeg,png,svg,jpg',
            'desc' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $coverName = null;
        
        if($request->file('cover')){
            $coverName = $request->file('cover')->getClientOriginalName() . '-' . time() . '.' . $request->file('cover')->extension();
            $request->file('cover')->move(public_path('imgUser'), $coverName);
        }

        Article::Create([
            'title' => $request->title,
            'desc' => $request->desc,
            'cover' => $coverName,
            'user_id' => $user->id,
        ]);

        return response()->json(['message' => 'Article Added Successfully']);
    }

    public function show($id)
    {
        return Article::with('user')->where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'cover' => 'mimes:jpeg,png,svg,jpg',
            'desc' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }

        $coverName = $article->cover;
        
        if($request->file('cover')){
            File::delete(public_path("\imgUser\\").$coverName);
            $coverName = $request->file('cover')->getClientOriginalName() . '-' . time() . '.' . $request->file('cover')->extension();
            $request->file('cover')->move(public_path('imgUser'), $coverName);
        }

        $article->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'cover' => $coverName,
        ]);

        return response()->json(['message' => 'Article Updated Successfully']);
    }

    public function destroy($id)
    {
        $article = Article::Find($id);
        if ($article->cover) {
            File::delete(public_path("\imgUser\\").$article->cover);    
        }
        $article->delete();
        return response()->json(['message' => 'Article Deleted Successfully']);
    }
}
