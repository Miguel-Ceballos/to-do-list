<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('admin.pages.index');
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'page' => 'required|min:1|max:30'
        ]);

        $user_id = 1;

        Page::create([
            'user_id' => $user_id,
            'page' => $request->page
        ]);

        return redirect()->route('task.index');
    }
}
