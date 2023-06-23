<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard_user()
    {

        $users = User::all();
        return view('admin.dashboard_user', compact('users'));
    }

    public function index_user()
    {
        $user = Auth::user();
        return view('index_user', compact('user'));
    }

    public function edit_user(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'call_num' => 'required',
            'password' => 'required|min:8',

        ]);
        $user->update([
            'name' => $request->name,
            'call_num' => $request->call_num,
            'password' => Hash::make($request->password)
        ]);

        return Redirect::back();
    }
}
