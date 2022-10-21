<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts.index', ['posts' => DB::table('posts')->paginate(20)]);
    }
}
