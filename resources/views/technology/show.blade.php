@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1>
            Tecnologia {{ $technology -> name }}
        </h1>

        <div class="card">
            <div class="card-header">  
            </div>
            <div class="card-body">
                <p>Nome Tecnologia {{  $technology -> name}}</p>
                <p>Descrizione {{ $technology -> description }}</p>
            </div>
            <div class="card-footer">
                <h3>Progetti che utilizzano questa technologia</h3>
                @foreach ($technology -> projects as $project)
                    <li>
                        <a href="{{ route('project.show', $project -> id) }}">
                            {{ $project -> name }}
                        </a>
                        
                    </li>
                @endforeach
                <input class="btn btn-primary my-3" type="submit" value="update">
            </div>
        </div>
    </div>
@endsection

