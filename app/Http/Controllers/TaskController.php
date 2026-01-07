<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;


class TaskController extends Controller
{

    public function store(Request $request, Project $project)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string',
            'priority' => 'required|string',
            'due_at' => 'nullable|date',
        ]);


        $task = $project->tasks()->create($data);

        return response()->json($task, 201);
    }


    public function index($projectId)
    {
        $tasks = Task::where('project_id', $projectId)->get();
        return response()->json($tasks);
    }
}
