<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $r){
        $tasks = Task::all()->take(5);
        return view ('tasks.view', ['tasks' => $tasks]);
    }
    public function create(Request $r){
        return view ('tasks.create');
    }
    public function edit(Request $r){
        return view ('tasks.edit');
    }
    public function delete(Request $r){
        return redirect(route('home'));
    }
}
