<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('welcome');
    // }
    public function index()
    {
        $cars = Car::take(6)->get();
        return view('welcome', compact('cars'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function faq()
    {
        return view('faq');
    }
}
