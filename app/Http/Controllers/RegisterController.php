<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users|min:4|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);
    }
}
