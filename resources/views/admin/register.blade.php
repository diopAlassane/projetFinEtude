@extends('layouts.masteradmin')
@section('content')

 <div id="layoutSidenav_content">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" >
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-2 text-center">Formulaire</h3>
                            <p class="text-dark-50 mt-0 mb-5 text-center">Veuillez remplir le formulaire pour enregistrer un nouveau utilisateur</p>
                            <form action="/addUser" method="POST" name="utilisateur" id="utilisateur">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="prenom" name="prenom"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="prenom">Prénom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="nom" name="nom"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="nom">Nom</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <input type="date" id="date_nais" name="date_nais"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="date_nais">Date de naissance</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="adresse" name="adresse"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="adresse">Adresse</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="contact" name="contact"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="contact">Contact</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="cni" name="numero_cni"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="cni">Numéro CNI</label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="email" name="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <select class="select form-control-lg" name="sexe">
                                                <option value="0" disabled>-- Choisir --</option>
                                                <option value="Homme" selected>Homme</option>
                                                <option value="Femme">Femme</option>
                                            </select>
                                            <label class="form-label select-label">Sexe</label>

                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <select class="select form-control-lg" name="type">
                                            <option value="0" disabled>-- Choisir --</option>
                                            <option value="Administrateur" selected>Administrateur</option>
                                            <option value="Pèlerin">Pèlerin</option>
                                            <option value="Agent Comptoir">Agent Comptoir</option>
                                        </select>
                                        <label class="form-label select-label">Choisissez la nature de l'utilisateur</label>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-success btn-lg text-center" name="submit" type="submit" value="Enregistrer" />
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
