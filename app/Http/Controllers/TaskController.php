<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function list()
    {
        // Query Builder way.
        // $tasks  = DB::table('tasks')->get();

        // Model way.
        $tasks = Task::all();

        return view('TaskList', compact('tasks'));
    }

    public function insert(Request $request)
    {
        // Query Builder way.
        /*
        DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        */

        // Model way.
        $task = new Task();

        $task->name = $request->name;
        $task->save();

        return redirect()->back();
    }

    public function edit($id, Request $request)
    {
        DB::table('tasks')->where('id', $id)->update(['name' => $request->name, 'updated_at' => now()]);
        return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->back();
    }
}
