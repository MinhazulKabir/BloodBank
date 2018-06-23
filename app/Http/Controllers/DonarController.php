<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class DonarController extends Controller
{
    public function index(Request $request)
    {
        $donar =Profile::orderBy('id', 'desc');
        $search=$request->input('search');
        if(!empty($search))
        {
            $donar->where('location','LIKE','%'.$search.'%')
                ->orWhere('blood_group','LIKE','%'.$search.'%');
        }
        $donar=$donar->paginate(12);
        return view('donar', compact('donar'));
    }

    public function show($donar_slug)
    {
        $donar = Profile::where('id', $donar_slug)->firstOrFail();
        return view('donarInfo', compact('donar'));
    }


}
