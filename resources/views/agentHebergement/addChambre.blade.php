@extends('layouts.masterheb')
@section('content')
<div id="layoutSidenav_content">

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-1 text-center">Formulaire</h3>
                            <p class="text-dark-50 mt-0 mb-5 text-center">Veuillez remplir le formulaire pour ajouter
                                une chambre</p>

                            <form action="/addCha" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <select class="select form-control-lg" name="hotel_id">
                                            <option value="0" disabled selected>-- Choisir --</option>

                                            @foreach ($hotel as $item)
                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                            @endforeach

                                        </select>
                                        <label class="form-label select-label">Choisissez un hôtel</label>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="type" name="type"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="type_chambre">Type de chambre</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="nombre_place" name="nombre_place"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="nombre_place">Nombre de place</label>
                                        </div>

                                    </div>
                                    <div class="form-group mb-3">
                                        <select class="select form-control-lg" name="pelerin_name">
                                            <option value="0" disabled selected>-- Choisir --</option>

                                            @foreach ($pelerins as $pelerin)
                                            <option value="{{$pelerin->prenom}} {{$pelerin->nom}}"> {{$pelerin->prenom}} {{$pelerin->nom}}</option>
                                            @endforeach

                                        </select>
                                        <label class="form-label select-label">Affecter à un pèlerin</label>

                                    </div>
                                </div>


                                <div class="mt-4 pt-2">
                                    <input class="btn btn-success btn-lg" type="submit" name="sutmit"
                                        value="Enregistrer" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection
