<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('form-news');
    }
}
