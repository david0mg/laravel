<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return Task::all();
    }

    public function storeMany(){
        for ($i=1; $i < 10000; $i++) { 
            Task::create([
                'name' => "Task $i"
            ]);
        }
    
        return response()->json(
            [
                'msg' => 'Tasks were created successfully'
            ],201);
    }
}
