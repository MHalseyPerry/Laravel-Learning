@extends('layout')

@section('title', 'Create Page')

@section('content')
        <h1>Create a new task</h1>

        <form method="POST" action="/projects">

            @csrf

            <div>
                <input type="text" name="title" placeholder="Project title" required>
            </div>

            <div>
                <textarea name="description" placeholder="Project description" required></textarea>
            </div>

            <div>
                <button type="submit">Create Project</button>
            </div>

            @if ($errors->any())
                <div class="notification">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
@endsection
