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
    public function room()
    {
        return view('rooms');
    }
    public function roomSingle()
    {
        return view('room-single');
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
