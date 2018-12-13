@extends('layout')

@section('title', 'Edit Page')

@section('content')
        <h1>Edit Page</h1>

        {{-- Form for editing project contents--}}
        <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 5px">
        {{-- {{ method_field('PATCH') }} --}}
        @method('PATCH')
        @csrf
            <div class="field">
                <label class="label" for="title">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea">{{ $project->description }}</textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    {{-- <button type="submit" class="button is-link">Update Project</button> --}}
                    <input type="submit" class="button is-link" value="Update Project">
                </div>
            </div>
        </form>

        {{-- Form for deleting project entirely--}}
        <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
            <div class="field">
                <div class="control">
            {{-- <button type="submit" class="button is-link">Update Project</button> --}}
                <input type="submit" class="button is-link" value="Delete Project">
                </div>
            </div>
        </form>
@endsection
