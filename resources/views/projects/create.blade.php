<!-- resources/views/projects/create.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Create New Project</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="name">Project Name:</label>
        <input type="text" name="name" required>

        <label for="description">Description:</label>
        <textarea name="description"></textarea>

        <button type="submit">Create Project</button>
    </form>

    <a href="{{ route('projects.index') }}">Back to Projects</a>
@endsection
