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
                    <div>
                        <form method="POST" action="/tasks/{{$task->id}}">
                            @method('PATCH')
                            @csrf
                            <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                    {{ $task->description }}
                            </lable>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif


@endsection
