<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Create New Task</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Task Title:</label>
        <input type="text" name="title" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" required>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="todo">To Do</option>
            <option value="in_progress">In Progress</option>
            <option value="completed">Completed</option>
        </select>

        <button type="submit">Create Task</button>
    </form>

    <a href="{{ route('tasks.index') }}">Back to Tasks</a>
@endsection
