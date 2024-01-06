<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        $data = [
            'todos' => $todos
        ];
        return view('index', $data);
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

    public function edit(Todo $id)
    {
        $todo=Todo::findorFail($id);
        return view('edit', compact('todo'));
    }

    public function update(Request $request, Todo $id)
    {
        $id->update($request->all());
        return redirect('/');
    }

    public function delete(Todo $id)
    {
        $id->delete();
        return redirect('/');
    }
}
