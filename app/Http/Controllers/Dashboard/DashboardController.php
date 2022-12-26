<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //? another way to apply authMiddleware
    // public function __construct()
    // {
    //     $this->middleware(['auth'])->except('fun name');
    //     $this->middleware(['auth'])->only('fun name');
    // }
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
