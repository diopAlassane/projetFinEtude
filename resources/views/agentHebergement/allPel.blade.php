@extends('layouts.masterheb')
@section('content')

<div id="layoutSidenav_content">
    <div class="container mt-3">
        <div class="card bg-light mb-5">
            <h2 style="text-align: center;font-size:30px;">La liste des pèlerins</h2>
        </div>

        <table class="table table-hover">
            <thead>
                <tr class="bg-light">
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>E-mail</th>
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
</div>
@endsection
