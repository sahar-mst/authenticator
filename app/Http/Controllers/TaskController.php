<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

   // public function store(Request $request, Project $project)
   public function tasks()
{
    return $this->hasMany(Task::class);


     // بررسی مالکیت پروژه
        if ($project->user_id !== auth()->id()) {
            abort(403);
        }

      // اعتبارسنجی داده‌ها
        $data = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'due_at' => 'nullable|date'
        ]);

        return response()->json(
           // ایجاد تسک جدید
            $project->tasks()->create($data),
            201
        );
    }
}
