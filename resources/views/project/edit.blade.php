@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1>Update Project</h1>

        <form
            method="POST"
            action="{{ route('project.update', $project -> id) }}"
        >

            @csrf
            @method("Put")

            <div class="group-form">
                <label for="name">NAME</label>
                <input type="text" name="name" id="name" value="{{ $project -> name }}">
            </div>
            <div class="group-form">
                <label for="description">DESCRIPTION</label>
                <input type="text" name="description" id="description" value="{{ $project -> description }}">
            </div>
            <div class="group-form">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" value="{{ $project -> author }}">
            </div>
            <div class="group-form">
                <label for="start_date">START DATE</label>
                <input type="date" name="start_date" id="start_date" value="{{ $project -> start_date }}">
            </div>
            <div class="group-form">
                <label for="end_date">END DATE</label>
                <input type="date" name="end_date" id="end_date" value="{{ $project -> end_date }}">
            </div>
           
            <div class="group-form d-flex justify-content-between">
                <label for="type_id">Type</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type -> id }}"
                            @selected($project -> type -> id === $type -> id)
                            >
                            {{ $type -> name }}
                        </option>
                    @endforeach
                </select>
                <label for="technology_id">Technology</label>
                    @foreach ($technologies as $technology)
                        <div class="form-check mx-auto" style="width: 200px">
                            <input class="form-check-input" type="checkbox" id="technology_id" name="technologies[]" value="{{ $technology -> id }}"
                                @foreach ($project -> technologies as $projectTechnology)
                                    @checked($projectTechnology -> id === $technology -> id)
                                @endforeach
                            >
                            <label class="form-check-label" for="technology_id">
                                {{ $technology -> name }}
                            </label>
                        </div>
                    @endforeach
            </div>

            <input class="my-3" type="submit" value="UPDATE">
        </form>
    </div>

@endsection
