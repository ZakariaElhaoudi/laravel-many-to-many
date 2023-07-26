@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1>Create new technology</h1>

        <form
            method="POST"
            action="{{ route('technology.store') }}"
        >

            @csrf
            @method("POST")

            <div class="group-form">
                <label for="name">NAME</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="group-form">
                <label for="description">DESCRIPTION</label>
                <input type="text" name="description" id="description">
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

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>

@endsection
