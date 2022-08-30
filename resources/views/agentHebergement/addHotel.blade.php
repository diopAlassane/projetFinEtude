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
                            <p class="text-dark-50 mt-0 mb-5 text-center">Veuillez remplir le formulaire pour ajouter un hôtel</p>

                            <form action="/addHotel" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="nom" name="nom"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="nom">Nom de l'hôtel</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="description" name="description"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="description">Description</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="adresse" name="adresse"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="adresse">Adresse</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="date_ajout" name="date_ajout"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="date_ajout">Date d'ajout</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-success btn-lg" type="submit" name="sutmit" value="Enregistrer" />
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
