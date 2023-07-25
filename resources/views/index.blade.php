@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col text-center">
                <h1>Progetti</h1>
                <ul class="list-unstyled">
                    @foreach( $projects as $project)

                        <a class="text-dark" href="{{ route('show', $project -> id) }}">
                            <li>{{ $project -> name}}</li>
                        </a>
            
                    @endforeach
                </ul>
            </div>
        </div>
    
    </div>
@endsection