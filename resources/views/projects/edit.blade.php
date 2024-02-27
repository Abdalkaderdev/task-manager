<!-- resources/views/projects/edit.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Edit Project: {{ $project->name }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="name">Project Name:</label>
        <input type="text" name="name" value="{{ $project->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ $project->description }}</textarea>

        <button type="submit">Update Project</button>
    </form>

    <a href="{{ route('projects.index') }}">Back to Projects</a>
@endsection
