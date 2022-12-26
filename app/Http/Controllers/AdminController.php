<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function indexV2()
    {
        return view('dashboard.index2');
    }
    public function indexV3()
    {
        return view('dashboard.index3');
    }
}
