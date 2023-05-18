<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:3|max:255',
            'status' => 'required',
            'comments' => 'max:255',
            'page' => 'required'
        ]);
    }

}
