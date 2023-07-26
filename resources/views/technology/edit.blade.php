@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1>Update Technology</h1>

        <form
            method="POST"
            action="{{ route('technology.update', $technology -> id) }}"
        >

            @csrf
            @method("Put")

            <<div class="group-form">
                <label for="name">NAME</label>
                <input type="text" name="name" id="name" value="{{ $technology -> name }}">
            </div>
            <div class="group-form">
                <label for="description">DESCRIPTION</label>
                <input type="text" name="description" id="description" value="{{ $technology -> description }}">
            </div> 
            <div>
                @foreach ($projects as $project)
                <div class="form-check mx-auto" style="max-width: 300px">
                    <input class="form-check-input" type="checkbox" value="{{ $project -> id }}"  name="projects[]" id="project{{ $project -> id }}">
                    <label class="form-check-label" for="project{{ $project -> id }}">
                    {{ $project -> name }}
                    </label>
                </div>
            @endforeach
            </div>   

            <input class="my-3" type="submit" value="UPDATE">
        </form>
    </div>

@endsection
