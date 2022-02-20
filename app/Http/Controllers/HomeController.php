<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() { }

    public function index(): View|Factory
    {
        return view('index');
    }

    public function about(): View|Factory
    {
        return view('about');
    }
}
