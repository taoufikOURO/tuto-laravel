<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
        $fields =  $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        Task::create($fields);
    }
}
