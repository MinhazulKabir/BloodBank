<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function manuel(Request $request)
    {
        return view('manuel');
    }
    public function about(Request $request)
    {
        return view('about');
    }
    public function contact(Request $request)
    {
        return view('contact');
    }
    
}
