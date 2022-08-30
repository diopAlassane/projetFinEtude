@extends('layouts.masteradmin')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tableau de bord</h1>
            <ol class="breadcrumb mb-4">
            </ol>
            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Consulter les utilisateurs</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('allUser')}}">Voir les
                                détails</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Consulter les comptes</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{route('allAccount')}}">Voir les
                                détails</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <div class="card mb-2 mt-5 bg-light">Liste des utilisateurs</div>
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
                        <th>Actions</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}

        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Groupe Tasnim 2022</div>
                {{-- <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div> --}}
            </div>
        </div>
    </footer>
</div>

@endsection
