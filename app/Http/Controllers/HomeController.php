<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'teams' => Team::all(),
            'posts' => Post::take(3)->get()
        ]);
    }
}
