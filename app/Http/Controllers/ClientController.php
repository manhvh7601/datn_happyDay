<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    public function resort()
    {
        return view('resort');
    }
    public function resortReview()
    {
        return view('resortReview');
    }
    public function restaurant()
    {
        return view('restaurant');
    }
    public function contact()
    {
        return view('contact');
    }
}
