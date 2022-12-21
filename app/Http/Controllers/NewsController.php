<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::with('teams')->findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function filter($name)
    {
        $news = Team::where('name', $name)->first()->news()->with('teams')->latest()->paginate(5);
        $team = Team::where('name', $name)->first();
        return view('news.team.filter', compact('news', 'team'));
    }
}
