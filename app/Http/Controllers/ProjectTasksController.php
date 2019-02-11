<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{

    public function update(Task $task){
        if(request()->has('completed')){
            $task->complete();
        } else {
            $task->incomplete();
        }
        return back();
    }

    public function store(Project $project){
        $validated = request()->validate(['description' => 'required']);

        $project->addTask($validated);

        return back();
    }
}
