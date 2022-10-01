<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index')
            ->with('tasks', Task:all());
    }

    // public function store()
    // {
    //     Task::create(request()->only(['title', 'description']));

    //     return redirect('tasks');
    // }

    public function store(\Illuminate\Http\Request $request)
    {
        Task::create($request->only(['title', 'description']));

        return redirect('tasks');
    }
}
