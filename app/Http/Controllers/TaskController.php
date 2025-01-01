<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Employee;

use Illuminate\Http\Request;

class TaskController extends Controller {
    public function index()
    {
        $tasks = Task::with('employee')->get();
        
        return view('task.index', compact('tasks'));
    }

    public function create() {
        $task = new Task;
        $staff = Employee::select('id', 'fullname')->get();
        
        return view('task.create', compact("task", "staff"));
    }

    public function store(Request $request) {
        $request->validate([
            'text' => 'required|max:240',
            'employee_id' => 'required'
        ]);


        Task::create($request->all());

        return redirect()->route('index_task');
    }

    
    public function edit(Task $task)
    {
        $staff = Employee::select('id', 'fullname')->get();
        return view('task.edit', compact("task", "staff"));
    }


    public function update(Request $request, Task $task)
    {
        $request->validate([
            'text' => 'required|max:240',
            'employee_id' => 'required'
        ]);


        $task = $task->update($request->all());

        return redirect()->route('index_task');
    }


    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('index_task');
    }
}
