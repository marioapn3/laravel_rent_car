<?php

namespace App\Http\Controllers;

use App\Models\CarReturn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CarReturnController extends Controller
{
    public function dashboard_return()
    {

        $CarReturns = CarReturn::all();
        return view('admin.dashboard_return', compact('CarReturns'));
    }

    public function edit_validate_car(CarReturn $CarReturn)
    {
        return view('admin.dashboard_edit_return', compact('CarReturn'));
    }
    public function update_return(CarReturn $CarReturn, Request $request)
    {
        $request->validate([
            'date_of_return' => 'required',
            'fines' => 'required|min:0',
        ]);

        $CarReturn->update([
            'date_of_return' => $request->date_of_return,
            'fines' => $request->fines,
            'validate_admin' => true,
        ]);

        return Redirect::route('dashboard_return');
    }
}
