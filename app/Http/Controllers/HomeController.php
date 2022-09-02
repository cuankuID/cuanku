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

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }

    public function service()
    {
        return view('home.service');
    }

    public function team()
    {
        return view('home.team', [
            'teams' => Team::all()
        ]);
    }
}
