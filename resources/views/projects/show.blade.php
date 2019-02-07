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

        <form method="POST" action="/projects/{{ $project->id }}/tasks">
            @csrf
            <div class ="field">
                <label class="label" for="description">New Task</label>
                <div class="control">
                    <input type="text" class="input" name="description" placeholder="New Task" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input type="submit" class="button">Add Task</input>
                </div>
            </div>
            @include('errors')
        </form>




@endsection
