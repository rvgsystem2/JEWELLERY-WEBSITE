<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()

    {
        $banners = Banner::all();
        $abouts = About::latest()->get();
        $aboutfeatures = AboutFeature::latest()->get();
        return view('front.index', compact('banners', 'abouts', 'aboutfeatures'));
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
}
