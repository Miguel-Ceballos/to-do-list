<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index()
    {
        return view('sessions.login');
    }

    public function create()
    {
        return view('sessions.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('message', 'Incorrect credentials');
        }

        return redirect()->route('pages.index', auth()->user()->username);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('login');
    }

}
