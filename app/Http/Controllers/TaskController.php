<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $r){
        $tasks = Task::all()->take(13);
        return view ('tasks.view', ['tasks' => $tasks]);
    }
    public function create(Request $r){
        $categories = Category::all();
        $data['categories'] = $categories;
        return view ('tasks.create', $data);
    }

    public function create_action (Request $r){
        $task = $r->only(['title', 'due_date', 'description', 'category_id']);

        $task['user_id'] = 1;

        $db_task = Task::create($task);
        return redirect(route('home'));



    }

    public function edit(Request $r){
        $id = $r->id;
        $task = Task::find($id);

        if(!$task){
            return redirect(route('home'));
        }
        
        $data['task'] = $task;
        $categories = Category::all();
        $data['categories'] = $categories;

        return view ('tasks.edit', $data);
    }


    public function edit_action(Request $r){
        $task_request = $r->only(['title' , 'due_date', 'description', 'category_id']);
        $task = Task::find($r->id);
        
        if(!$task){
            return redirect(route('home'));
        }

        $task_request['is_done'] = $r->is_done ? true : false;
        // dd($task_request);
        $task->update($task_request);
        $task->save();
        
        
        return redirect(route('home'));

    }

    public function delete(Request $r){

        $id = $r->id;
        $task = Task::find($id);

        if($task){
            $task->delete();
        }

        return redirect(route('home'));
    }
}
