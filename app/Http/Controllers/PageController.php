<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $pages = Page::where('user_id', $user->id)->get();
        //dd($pages);
        return view('admin.pages.index', [
            'pages' => $pages
        ]);
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
            'page' => $request->page,
            'slug' => Str::slug($request->page)
        ]);

        return redirect()->route('pages.index', auth()->user()->username);
    }
}
