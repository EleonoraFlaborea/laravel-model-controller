<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $movies = config('movies');

        return view('home', compact('movies'));
    }
}
