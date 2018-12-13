@extends('layout')

@section('title', 'Home Page')


@section('content')

    <h1>Projects!</h1>

    <table style="width: 50%; border-collapse: collapse;"border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Edit/Delete</th>
        </tr>

        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td><a href="{{route('projects.show', $project)}}">{{ $project->title }}</a></td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
                <td><a href="{{route('projects.edit', $project)}}">Edit/Delete</a></td>
            </tr>
        @endforeach
    </table>




@endsection
