@extends('layout')

@section('title', 'Create Page')

@section('content')

        <h1>{{$project->title}}</h1>

        <div class="content">{{ $project->description }}
            <p>
                <a href="{{route('projects.edit', $project)}}">Edit/Delete</a></td>
            </p>
        </div>

        @if ($project->tasks->count())
            <div>
                @foreach ($project->tasks as $task)
                    <li> {{ $task->description }} </li>
                @endforeach
            </div>
        @endif



@endsection
