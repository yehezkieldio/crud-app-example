<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Repositories\TodoRepositoryInterface;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = $this->todoRepository->all();

        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->todoRepository->create($request->all());

        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        $todo = $this->todoRepository->find($todo->id);

        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        $todo = $this->todoRepository->find($todo->id);

        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $this->todoRepository->update($todo->id, $request->all());

        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $this->todoRepository->delete($todo->id);

        return redirect()->route('todos.index');
    }
}
