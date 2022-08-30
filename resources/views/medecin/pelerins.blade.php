@extends('layouts.mastermed')
@section('content')


<div class="container mt-3">
    <div class="card bg-light mb-5">
        <h2 style="text-align: center;font-size:30px;">La liste des pèlerins</h2>
    </div>
    <div class="row">
        {{-- Met ici le message de succes ou erreur --}}
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container-fluid">
            {{-- <a href="{{route('addPelerin')}}" class="btn btn-primary btn-sm p-2 mb-1">NOUVEAU</a> --}}
            <form class="d-flex" action="">
                <input class="form-control me-2" name="search" value="{{ old('search', $search) }}" type="search" placeholder="Saisir..."
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>
    <table class="table table-hover">
        <thead>
            <tr class="bg-light">
                <th>#</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>E-mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelerins as $pelerin)

            <tr>
                <td>{{$pelerin->id}}</td>
                <td>{{$pelerin->prenom}}</td>
                <td>{{$pelerin->nom}}</td>
                <td>{{$pelerin->date_nais}}</td>
                <td>{{$pelerin->email}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection