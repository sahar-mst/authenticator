<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{
    public function index(Request $request)

    {
        $userId =  Auth::id();
        $projects = Project::with('tasks')->where('user_id', $userId)->get();

        return response()->json($projects, 200);
    }

    public function show($id)
    {
        $userId =  Auth::id();
        $project = Project::with('tasks')->where('user_id',$userId)->where('id', $id)->first();

        if (!$project) {
            return response()->json([
                'error' => 'Project not found or you do not have access.'
            ], 404);

        }
        return response()->json($project, 200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $project = Project::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return response()->json($project, 201);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $userId =  Auth::id();
        $project = Project::where('user_id',$userId)->where('id', $id)->first();

        if (!$project) {
            return response()->json([
                'error' => 'Project not found or you do not have access.'
            ], 404);

        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Project updated successfully.'
        ], 200);
    }


    public function destroy($id)
    {
        $userId =  Auth::id();
        $project = Project::where('user_id',$userId)->where('id', $id)->first();

        if (!$project) {
            return response()->json([
                'error' => 'Project not found or you do not have access.'
            ], 404);

        }
        $project->delete();

        return response()->json([
            'message' => 'Project deleted successfully.'
        ], 200);
    }
}







