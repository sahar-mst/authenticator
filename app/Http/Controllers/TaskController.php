<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;


class TaskController extends Controller
{
    public function store(Request $request, Project $project)

    {
        if($project->user_id !== $request->user()->id){
        return response()->json(['error' => 'Project not found or you do not have access'], 403);
    }

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:todo,doing,done',
            'priority' => 'required|in:low,medium,high',
            'due_at' => 'nullable|date',
        ]);

        $task = $project->tasks()->create($data);

        return response()->json($task, 201);
    }

    public function index(Project $project, Request $request)
    {
       if($project->user_id !== $request->user()->id){
           return response()->json(['error' => 'Forbidden'], 403);
           }
           $tasks = $project->tasks()->get();

        return response()->json($tasks, 200);
    }

    public function show(Project $project, Task $task, Request $request)
    {
       if($project->user_id !== $request->user()->id){
         return response()->json(['error' => 'Forbidden'], 403);
      }

            if($task->project_user_id!== $project->user_id){
           return response()->json(['error' => 'Project not found or you do not have access'], 404);
             }

                return response()->json($task, 200);
        }
    public function update(Request $request, Project $project, Task $task)
    {
        if ($project->user_id !== $request->user()->user_id) {
            return response()->json(['error' => 'Forbidden'], 403);
        }
        if ($task->project_id !== $project->user_id) {
            return response()->json(['error' => 'Project not found or you do not have access'], 404);
        }

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
        if($project->user_id !== $request->user()->id) {
            return response()->json(['error' => 'Forbidden'], 403);
        }
       if($task->project_id !== $project->id) {
           return response()->json(['error' => 'Project not found or you do not have access'], 404);
       }
           $task->delete();

        return response()->json(null, 204);

       }
        }


