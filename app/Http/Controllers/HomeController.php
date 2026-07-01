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
        $videoNames = [
            'long1.mp4',
            'long2.mp4',
            // 'long3.mp4',
            'long4.mp4',
            'long5.mp4',

        ];
        $activeCategory = 1;

        return view('home', compact('videoNames', 'categories', 'videos', 'activeCategory'));
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
        $videos = [
            asset('shorts-videos/video1.mp4'),
            asset('shorts-videos/video2.mp4'),
            asset('shorts-videos/video3.mp4'),
            asset('shorts-videos/video4.mp4'),
            asset('shorts-videos/video1.mp4'),
            asset('shorts-videos/video2.mp4'),
        ];

        return view('shorts', compact('videos'));
    }
}
