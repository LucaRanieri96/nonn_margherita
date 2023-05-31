<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function shop()
    {
        return view('shop');
    }
    public function blog()
    {
        return view('blog');
    }  
}
