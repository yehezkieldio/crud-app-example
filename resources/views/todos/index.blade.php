@extends('layout.initial')

@section('title', 'Todos')
@section('content')
    <div class="container">
        <div class="px-4 py-4">
            <h1 class="text-2xl font-bold">Todos</h1>
            <div>
                @if ($todos->isEmpty())
                    <p>No todos found.</p>
                @else
                    <ul>
                        @foreach ($todos as $todo)
                            <li class="flex flex-row justify-between gap-4 mt-4">
                                <a href="{{ route('todos.show', $todo->id) }}">{{ $todo->title }}</a>
                                <div class="flex flex-row ml-8 gap-4 border p-4">
                                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                    <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
