@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <h2 class="text-center">Lista Progetti</h2>
        <div class="container text-end">
            <a class="text-center btn btn-success" href="{{ route('admin.projects.create') }}">Aggiungi Nuovo Progetto</a>
        </div>
    
        @if (session('message'))
            <div class="alert alert-success mt-4">
              {{ session('message') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row"> {{ $project->slug }}</th>
                                <td class="w-50">{{ $project->description }}</td>
                                <td class="w-25">
                                    <a class="btn btn-success d-inline-block" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"> 
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>
                                    <a class="btn btn-warning d-inline-block" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"> 
                                        <i class="fa-solid fa-pen-to-square"></i>
                                     </a>
                                    
                                    @include('admin.partials.btn_archieve')
                                </td>
                            </tr>
                        @endforeach

                        @include('admin.partials.soft-delete-modal')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
