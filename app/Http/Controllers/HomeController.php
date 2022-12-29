<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $r){
        $tasks = Task::all()->take(15);
        $userAuth = Auth::user();
        return view ('home', ['tasks' => $tasks, 'userAuth' => $userAuth]);
        
    }
}
