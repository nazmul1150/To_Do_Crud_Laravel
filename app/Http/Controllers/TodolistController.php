<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TodoList;

class TodolistController extends Controller
{
    
    public function TodoList()
    {
        $todos = TodoList::orderBy('id','DESC')->get();
        return view('home',compact('todos'));
    }

    public function addTodoList(Request $request)
    {
        $todo = new TodoList();

        $todo->name = $request->name;
        $todo->save();

        return redirect()->route('home')->with('message', 'Item Add Successfully!');
    }

    public function deleteTodoList($id)
    {
        $todo = TodoList::find($id);
        $todo->delete();

        return redirect()->route('home')->with('message', 'Item Delete Successfully!');
    }

    public function editTodoList($id)
    {
        $todoedit = TodoList::find($id);

        return response()->json([
          'data' => $todoedit
        ]);
    }

    public function updateTodoList(Request $request)
    {
        $id = $request->item_id;

        $todo = TodoList::find($id);

        $todo->name = $request->name;
        $todo->update();

        return redirect()->route('home')->with('message', 'Item Update Successfully!');
    }

}
