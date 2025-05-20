<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Banner;
use App\Models\Category;
use App\Models\collection;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()

    {
        $banners = Banner::all();
        $abouts = About::latest()->get();
        $aboutfeatures = AboutFeature::latest()->get();
        $collections = collection::latest()->get();
        $categories = Category::latest()->get();
        return view('front.index', compact('banners', 'abouts', 'aboutfeatures', 'collections', 'categories'));
    }
    

    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
    public function detail(){
        return view('front.detail');
    }
    public function product(){
        return view('front.product');
    }

}
