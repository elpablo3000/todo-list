<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class TaskListController extends Controller {
    /**
     * Display to-do list editor.
     *
     * @param Request $request
     *
     * @return View
     */
    public function edit(Request $request): View {
        $tasks = Auth::user()->tasks;
        return view('tasks.edit', [
            'tasksToDo' => $tasks->whereNull('completed_at'),
            'tasksDone' => $tasks->whereNotNull('completed_at')
        ]);
    }

    /**
     * Creates new task for current user
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse {
        Auth::user()->tasks()->create([
            'title' => $request->title
        ]);
        return redirect()->route('tasks.edit');
    }

    /**
     * Delete selected task if it belongs to current user
     *
     * @param Request $request
     * @param $id
     *
     * @return RedirectResponse
     */
    public function delete(Request $request, $id): RedirectResponse {
        $task = Auth::user()->tasks()->findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.edit');
    }

    /**
     * Updates task for selected ID if it belongs to user
     *
     * @param Request $request
     * @param $id
     *
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse {
        $task = Auth::user()->tasks()->findOrFail($id);
        $task->update([
            'completed_at' => $request->completed ? now() : null
        ]);
        return redirect()->route('tasks.edit');
    }
}
