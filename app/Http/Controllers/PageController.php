<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //index method refers to homepage route
    public function index()
    {
        ddd(Movie::all());
        return view('home');
    }
}