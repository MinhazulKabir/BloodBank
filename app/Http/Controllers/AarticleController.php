<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AarticleController extends Controller
{
    public function home(Request $request)
    {
        return view('article');
    }

}
