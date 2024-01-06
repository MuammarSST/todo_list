<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos_0 = Todo::all()->where('is_done',0);
        $todos_1 = Todo::all()->where('is_done',1);
        
        return view('index', compact('todos_0','todos_1'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());

        return redirect('/');
    }

    public function edit(Todo $todo)
    {
        
        return view('edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect('/');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
