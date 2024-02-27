<!-- resources/views/tasks/edit.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Edit Task: {{ $task->title }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="title">Task Title:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ $task->description }}</textarea>

        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}" required>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="todo" @if($task->status == 'todo') selected @endif>To Do</option>
            <option value="in_progress" @if($task->status == 'in_progress') selected @endif>In Progress</option>
            <option value="completed" @if($task->status == 'completed') selected @endif>Completed</option>
        </select>

        <button type="submit">Update Task</button>
    </form>

    <a href="{{ route('tasks.index') }}">Back to Tasks</a>
@endsection
