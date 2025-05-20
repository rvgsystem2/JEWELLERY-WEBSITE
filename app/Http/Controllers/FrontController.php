<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
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
