<!-- resources/views/projects/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <h1>Projects</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach($projects as $project)
            <li>
                {{ $project->name }}
                <a href="{{ route('projects.edit', $project) }}">Edit</a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('projects.create') }}">Create New Project</a>
@endsection
