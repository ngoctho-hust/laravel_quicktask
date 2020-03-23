<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $task
        ]);
    }

    public function store(TaskRequest $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('tasks.index');
        }

        return redirect()->route('tasks.index');
    }
}
