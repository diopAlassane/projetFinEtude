@extends('layouts.masteradmin')
@section('content')

<div id="layoutSidenav_content">


    <div class="container mt-3">
        <div class="card bg-light mb-5">
            <h2 style="text-align: center;font-size:30px;">La liste des utilisateurs</h2>
        </div>
        <div class="row">
            {{-- le message de succes ou erreur --}}
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <nav class="navbar navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a href="{{route('register')}}" class="btn btn-primary btn-sm p-2 mb-1">NOUVEAU</a>
                {{-- <form class="d-flex" action="">
                    <input class="form-control me-2" name="search" value="{{ old('search', $search) }}" type="search" placeholder="Saisir..."
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form> --}}
            </div>
        </nav>
        <table class="table table-hover">
            <thead>
                <tr class="bg-light">
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Adresse</th>
                    <th>Contact</th>
                    <th>N° CNI</th>
                    <th>Sexe</th>
                    <th>Nature</th>
                    {{-- <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($utilisateur as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->prenom}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->date_nais}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->contact}}</td>
                    <td>{{$item->numero_cni}}</td>
                    <td>{{$item->sexe}}</td>
                    <td>{{$item->type}}</td>
                    {{-- <td>
                        <a href="{{route('show', $pelerin)}}"><i
                                class="fas fa-solid fa-eye text-success"></i></a>
                        <a href="{{route('pelerin.destroy', $pelerin)}}" onclick="event.preventDefault();
                        document.getElementById('pelerin-delete').submit();">
                            <i class="fas fa-solid fa-trash-arrow-up text-danger"></i>
                        </a>
                        <form id="pelerin-delete" action="{{route('pelerin.destroy', $pelerin)}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
