<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function maps()
    {
        return view('depan.maps');
    }

    public function wisata()
    {
        return view('depan.wisata');
    }
}
