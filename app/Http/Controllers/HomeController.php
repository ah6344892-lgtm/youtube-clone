<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('id')->get();

        $videos = Video::all();
        $activeCategory = 1;

        return view('home', compact('categories', 'videos', 'activeCategory'));
    }

    public function activeCategory(int $id)
    {
        if ($id === 1) {
            return redirect()->route('home');
        }
        $categories = Categories::orderBy('id')->get();
        $videos = Video::where('category_id', $id)->get();
        $activeCategory = $id;

        return view('home', compact('categories', 'videos', 'activeCategory'));
    }

    public function shorts()
    {
        return view('pages.shorts');
    }
}
