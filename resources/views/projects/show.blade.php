@extends('layout')

@section('title', 'Create Page')

@section('content')

        <h1>{{$project->title}}</h1>

        <div class="content">{{ $project->description }}</div>

        <p>
            <a href="{{route('projects.edit', $project)}}">Edit/Delete</a></td>
        </p>


@endsection
