<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show(User $user, Page $page)
    {
        $tasks = Task::where('page_id', $page->id)->get();
        return view('admin.tasks.show', [
            'user' => $user,
            'tasks' => $tasks
        ]);
    }

    public function create(Page $page)
    {
//        dd($page);
        return view('admin.tasks.create', [
            'page' => $page
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:3|max:255',
            'state' => 'required',
            'comments' => 'max:255',
            'page' => 'required'
        ]);
        $state_id = 2;
        $page_id = 2;
        Task::create([
            'user_id' => auth()->user()->id,
            'task' => $request->description,
            'state_id' => $state_id,
            'comment' => $request->comments,
            'page_id' => $page_id
        ]);

        return redirect()->route('pages.index', auth()->user()->username);
    }

}
