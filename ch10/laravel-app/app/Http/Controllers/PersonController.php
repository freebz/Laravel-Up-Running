<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function index(Request $request)
    {
        $allInput = $request->all();


        $request = request();
        $allInput = $request->all();
        // 혹은
        $allInput = request()->all();


        $request = app(Illuminate\Http\Request::class);
        $request = app('request');
        
    }
}
