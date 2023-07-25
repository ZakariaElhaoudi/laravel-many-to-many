@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1>
            Progetto {{ $project -> name }}
        </h1>

        <div class="card">
            <div class="card-header">  
                <h2>
                    <a href="{{ route('project.show', $project -> id) }}">
                        {{ $project -> name }}
                    </a>
                </h2>
        
            </div>
            <div class="card-body">
                <p>Descrizione {{ $project -> description }}</p>
                <p> Data inizio{{ $project -> start_date }}</p>
                <p> Data fine{{ $project -> end_date }}</p>
                <p>Autore {{  $project -> author}}</p>
            </div>
            <div class="card-footer">
                <h4>
                    Type: {{ $project -> type -> name }}
                </h4>
                <div>
                    <h4>Technology</h4>
                    <ul>
                        @foreach ($project -> technologies as $technology)
                            <li>
                                {{ $technology -> name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

