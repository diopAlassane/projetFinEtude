@extends('layouts.masterheb')
@section('content')

 <div id="layoutSidenav_content">


    <div class="container mt-3">
        <div class="card bg-light mb-5">
            <h2 style="text-align: center;font-size:30px;">La liste des chambre</h2>
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
                <a href="{{route('addChambre')}}" class="btn btn-primary btn-sm p-2 mb-1">Nouveau</a>
                <form class="d-flex" method="GET" action="search">
                    <input class="form-control me-2" name="searched" type="search" placeholder="Saisir..."
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>
        <table class="table table-hover">
            <thead>
                <tr class="bg-light">
                    <th>#</th>
                    <th>Hôtel</th>
                    <th>Type</th>
                    <th>Nombre de place</th>
                    <th>Affectation</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($chambre as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->hotel_id}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->nombre_place}}</td>
                    <td>{{$item->pelerin_name}}</td>
                    <td>
                        {{-- <a href="#"><i class="fas fa-solid fa-eye text-success"></i></a>
                        <a href="#"><i class="fas fa-solid fa-trash-arrow-up text-danger"></i></a> --}}
                        {{-- <a href="{{route('chambre.destroy', $chambre)}}" onclick="event.preventDefault();
                                document.getElementById('chambre-delete').submit();">
                                    <i class="fas fa-solid fa-trash-arrow-up text-danger"></i>
                                </a>
                                <form id="chambre-delete" action="{{route('chambre.destroy', $chambre)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}

                                {{-- <form id="chambre-delete" action="{{route('chambre.destroy'. $chambre)}}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                    <i class="fas fa-solid fa-trash-arrow-up text-danger"></i></a>
                                </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
