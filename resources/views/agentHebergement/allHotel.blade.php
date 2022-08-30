@extends('layouts.masterheb')
@section('content')

 <div id="layoutSidenav_content">


    <div class="container mt-3">
        <div class="card bg-light mb-5">
            <h2 style="text-align: center;font-size:30px;">La liste des hôtels</h2>
        </div>
        <nav class="navbar navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a href="{{route('addHotel')}}" class="btn btn-primary btn-sm p-2 mb-1">Nouveau</a>
            </div>
        </nav>
        <table class="table table-hover">
            <thead>
                <tr class="bg-light">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Adresse</th>
                    <th>Date d'ajout</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotel as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nom}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->adresse}}</td>
                    <td>{{$item->date_ajout}}</td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
@endsection
