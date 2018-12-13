@extends('layout')

@section('title', 'Create Page')

@section('content')
        <h1>Create a new task</h1>

        <form method="POST" action="/projects">

            @csrf

            <div>
                <input type="text" name="title" placeholder="Project title">
            </div>

            <div>
                <textarea name="description" placeholder="Project description"></textarea>
            </div>

            <div>
                <button type="submit">Create Project</button>
            </div>

        </form>
@endsection
