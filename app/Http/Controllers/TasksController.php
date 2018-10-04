<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;



class TasksController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$tasks = Task::all(); // selcet * from tasks

		return view('tasks.index', [
			'tasks' => $tasks
		]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:5'
		]);

		$task = new Task();
		$task->name = $request->input('name');
		$task->user_id = $request->user()->id;
		$task->save();

		return redirect('/tasks');
	}

	public function edit($id)
	{

		
		$task = Task::find($id);

		return view('tasks.edit', [
			'task' => $task
		]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request, [
			'name' => 'required|min:5'
		]);

		$task = Task::find($id);	
		$task->name = $request->input('name');
		$task->save();

		return redirect('/tasks');
	}

	public function destroy(Request $request, Task $task)
	{
		
		$task->delete();
		return back();
	}

	
}
