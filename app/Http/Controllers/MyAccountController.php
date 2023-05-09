<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class MyAccountController extends Controller
{
    public function index()
    {
        return view('customer.my-account');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'dob' => 'required|date',
            'gender' => 'required|string|in:male,female',
            'id_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->id_number = $request->input('id_number');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('my-account')->with('success', 'Your account information has been updated.');
    }

}
