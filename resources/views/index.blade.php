@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col text-center">
                
                <span>
                    <h1>Progetti</h1>
                    <a class="btn btn-primary" href="{{ route('project.create') }}">Plus</a>
                </span>
                
                <ul class="list-unstyled">
                    @foreach( $projects as $project)

                       
                        <span class="">
                            <a class="p-4" href="{{ route('project.show', $project -> id) }}">
                                <li>{{ $project -> name}}</li>
                            </a>
                        </span>
            
                    @endforeach
                </ul>
            </div>
        </div>
    
    </div>
@endsection