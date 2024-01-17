<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function tasks(){
        return view('tasks',[
            'tasks' => Task::all()
        ]);
    }
}
