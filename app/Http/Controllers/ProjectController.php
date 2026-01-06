<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// class ProjectController extends Controller
// {
//     //
// }







//use App\Models\Project;

// class ProjectController extends Controller
// {
//     public function index(Request $request)
//     {
//         // فقط پروژه‌های کاربر لاگین‌شده
//         return response()->json(
//             $request->user()->projects()->latest()->get()
//         );
//     }

//     public function store(Request $request)
//     {
//         $data = $request->validate([
//             'title' => 'required|string',
//             'description' => 'nullable|string',
//         ]);

//         $project = $request->user()->projects()->create($data);

//         return response()->json($project, 201);
//     }
// }






use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(
            $request->user()->projects()->with('tasks')->get()
        );
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $project = $request->user()->projects()->create($data);

        return response()->json($project, 201);
    }

    //public function show(Project $project)
    public function project()
{
    return $this->belongsTo(Project::class);

        $this->authorizeOwner($project);
        return response()->json($project->load('tasks'));
    }

    public function destroy(Project $project)
    {
        $this->authorizeOwner($project);
        $project->delete();
        return response()->json(['message'=>'Deleted']);
    }

    private function authorizeOwner(Project $project)
    {
        if ($project->user_id !== auth()->id()) {
            abort(403,'Access denied');
        }
    }
}
