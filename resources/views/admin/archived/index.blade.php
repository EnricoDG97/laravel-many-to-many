@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <h2 class="text-center">Lista Progetti Archiviati</h2>

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
                                    @include('admin.partials.btn_delete')
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        @include('admin.partials.delete-modal')

    </div>
@endsection
