<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function list()
    {
        $tasks  = DB::table('tasks')->get();
        return view('TaskList', compact('tasks'));
    }

    public function insert(Request $request)
    {
        DB::table('tasks')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->back();
    }
}
