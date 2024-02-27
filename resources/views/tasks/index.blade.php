<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Tasks</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach($tasks as $task)
            <li>
                {{ $task->title }}
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}">Create New Task</a>
@endsection
