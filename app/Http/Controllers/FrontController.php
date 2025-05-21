<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Banner;
use App\Models\Category;
use App\Models\collection;
use App\Models\Product;
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
        $products = Product::latest()->get()->take(8);
        return view('front.index', compact('banners', 'abouts', 'aboutfeatures', 'collections', 'categories', 'products'));
    }


    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        $abouts = About::latest()->get();
        return view('front.about', compact('abouts'));
    }
    public function detail(Product $product){

      $relatedProducts = Product::where('id', '!=', $product)
                              ->inRandomOrder()
                              ->take(4)
                              ->get();
        return view('front.detail', compact('product', 'relatedProducts'));
    }
    public function product(){
        $products = Product::latest()->paginate(8);

        return view('front.product', compact('products'));
    }
    public function gallery(){
        $collections = collection::latest()->get();
        $categories = Category::latest()->get();
        return view('front.gallery',compact('collections', 'categories'));
    }

}
