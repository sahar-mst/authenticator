<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class test extends Controller
{
       public function index(Request $request)
    {
        return response()->json(
            $request->user()->projects()->with('tasks')->get()
        );
    }



    public function store(Request $request, Project $project)

    {
        abort_if($project->user_id !== $request->user()->id, 403);


        $data = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:todo,doing,done',
            'priority' => 'required|in:low,medium,high',
            'due_at' => 'nullable|date',
        ]);

        $task = $project->tasks()->create($data);

        return response()->json($task, 201);
    }


    public function get(Project $project, Request $request)
    {
        abort_if($project->user_id !== $request->user()->id, 403);

        $tasks = $project->tasks()->get();

        return response()->json($tasks, 200);
    }


    public function show(Project $project, Task $task, Request $request)
    {
        abort_if($project->user_id !== $request->user()->id, 403);
        abort_if($task->project_id !== $project->id, 404);

        return response()->json($task, 200);
    }


    public function update(Request $request, Project $project, Task $task)
    {
        abort_if($project->user_id !== $request->user()->id, 403);
        abort_if($task->project_id !== $project->id, 404);

        $data = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|in:todo,doing,done',
            'priority' => 'sometimes|required|in:low,medium,high',
            'due_at' => 'nullable|date',
        ]);

        $task->update($data);

        return response()->json($task, 200);
    }


    public function destroy(Project $project, Task $task, Request $request)
    {
        abort_if($project->user_id !== $request->user()->id, 403);
        abort_if($task->project_id !== $project->id, 404);

        $task->delete();

        return response()->json(null, 204);
    }
}
