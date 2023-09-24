<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoListController extends Controller
{
    /**
     * Display to-do list.
     */
    public function edit(Request $request): View
    {
        return view('todo.edit', []);
    }
}
