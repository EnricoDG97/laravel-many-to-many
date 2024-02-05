@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title }}</h2>

        <div class="mt-4">
            Slug: {{ $project->slug }}
        </div>
        
        @if ($project->thumb)
            <div class="mt-4">
                <img src="{{ asset('storage/' . $project->thumb) }}" alt="">
            </div>
        @else
            <p>Nessuna copertina disponibile.</p>
        @endif
        
        <div>
            Tipologia: {{ $project->type ? $project->type->name : 'Nessuna tipologia assegnata' }}
        </div>

        <p class="mt-4">
            {{ $project->description }}
        </p>

        <div>
            <a class="btn btn-warning d-inline-block" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"> 
                <i class="fa-solid fa-pen-to-square"></i>
             </a>

             @include('admin.partials.btn_archieve')

        </div>
    </div>

    
@endsection