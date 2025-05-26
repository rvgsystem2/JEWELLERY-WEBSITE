<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFeature;
use App\Models\Banner;
use App\Models\Category;
use App\Models\collection;
use App\Models\Product;
use App\Models\Rate;
use Carbon\Carbon;
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
           $today = Carbon::today();
           $rates =Rate::all();
        return view('front.index', compact('banners', 'abouts', 'aboutfeatures', 'collections', 'categories', 'products','today','rates'));
    }

public function productsByCategory($id)
{
    $category = Category::findOrFail($id);
    $products = Product::where('category_id', $id)->where('status', 'active')->latest()->get();

    return view('front.category_products', compact('category', 'products'));
}

public function search(Request $request)
{
    $query = $request->input('query');

    if (!$query) {
        return response()->json([]);
    }

    $products = Product::with('category')
        ->where(function ($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%")
              ->orWhere('tag', 'LIKE', "%{$query}%")
              ->orWhere('title', 'LIKE', "%{$query}%")
              ->orWhereHas('category', function ($catQ) use ($query) {
                  $catQ->where('name', 'LIKE', "%{$query}%");
              });
        })
        ->take(10)
        ->get();

    return response()->json($products);
}


// public function search(Request $request)
// {
//     $query = $request->input('query');

//     if (!$query) {
//         return response()->json([]);
//     }

//     $products = Product::where('name', 'LIKE', "%{$query}%")
//         ->orWhere('tag', 'LIKE', "%{$query}%")
//         ->orWhere('title', 'LIKE', "%{$query}%")
//         ->with('category')
//         ->take(10)
//         ->get();

//     return response()->json($products);
// }


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
