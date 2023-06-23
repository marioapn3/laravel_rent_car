<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{

    public function index_car()
    {
        $cars = Car::all();
        return view('index_car', compact('cars'));
    }



    public function show_car(Car $car)
    {
        return view('show_car', compact('car'));
    }

    // public function edit_product(Product $product)
    // {
    //     return view('edit_product', compact('product'));
    // }
}
