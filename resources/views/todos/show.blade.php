@extends('layout.initial')

@section('title', 'Todos Information')
@section('content')
    <div class="container">
        <div class="px-4 py-4">
            <h1 class="text-2xl font-bold">
                {{ $todo->title }}
            </h1>
            <p class="text-base leading-snug mt-2">
                {{ $todo->description }}
            </p>
            <p>
                @if ($todo->completed)
                    <span class="text-green
                    font-bold">Completed</span>
                @else
                    <span class="text-red-500
                    font-bold">Not Completed</span>
                @endif
            </p>
            <div class="mt-8">

            </div>
        </div>
    </div>
@endsection
