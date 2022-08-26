@extends('layouts.master')
@section('content')
<div id="layoutSidenav_content">
    <form action="/addPel" method="POST">
        @csrf
        <section class="h-100 h-custom gradient-custom-2">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5" style="color: #000000;">Informations
                                                personnelles
                                            </h3>
                                            <div class="row">

                                                <div class="col-md-6 mb-4 pb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="prenom" name="prenom"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="prenom">
                                                            Prénom</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="nom" name="nom"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="nom">Nom
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="date" id="date_nais" name="date_nais"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="date_nais">Date de
                                                        naissance</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                    <div class="form-outline">
                                                        <input type="text" id="passeport" name="passeport"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="passeport">Numéro
                                                            passeport</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="contact" name="contact"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="contact">
                                                            Contact</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">
                                                    <div class="form-outline">
                                                        <input type="text" id="affinite" name="affinite"
                                                            class="form-control form-control-lg" />
                                                        <label class="form-label" for="nom">Affinité
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                        <div class="form-outline">
                                                            <input type="mail" id="email" name="email"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="email">E-mail
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                        <div class="form-outline">
                                                            <label class="form-label" for="niveau_etude">
                                                                Niveau d'étude</label>
                                                            <select name="niveau_etude" id="niveau_etude"
                                                                class="form-control form-control-lg text-center">
                                                                <option value="1" disabled selected>-- Choisir --
                                                                </option>
                                                                <option value="J'ai pas fréquenté l'école">J'ai pas fréquenté l'école
                                                                </option>
                                                                <option value="Niveau primaire">Niveau primaire</option>
                                                                <option value="Niveau collége">Niveau collége</option>
                                                                <option value="Niveau Lycée">Niveau Lycée</option>
                                                                <option value="Niveau secondaire">Niveau secondaire</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                        <div class="form-outline">
                                                            <input type="mail" id="langueParler" name="langueParler"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="langue">Langue parlée
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                        <div class="form-outline">
                                                            <select name="situation_matrimonaile" id="situation_matrimonaile"
                                                                class="form-control form-control-lg text-center">
                                                                <option value="1" disabled selected>-- Choisir --
                                                                </option>
                                                                <option value="Marié">Marié</option>
                                                                <option value="Célibataire">Célibataire</option>
                                                            </select>
                                                            <label class="form-label" for="passeport">
                                                                Situation matrimoniale</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-4 pb-2 mb-md-0 pb-md-0">
                                                        <div class="form-outline">
                                                            <input type="text" id="adresse" name="adresse"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="adresse">Adresse
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 bg-light text-black">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Personne à contacter en cas d'urgence
                                            </h3>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="nom_conjoint" name="nom_conjoint"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="nomConj">Nom au complet
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="contact_conjoint" name="contact_conjoint"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="contact">Contact
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Informations supplémentaires
                                            </h3>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="nombre_enfant" name="nombre_enfant"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="nomConj">Nombre enfants
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <input type="text" id="profession" name="profession"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="contact">Profession
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-success btn-lg"
                                                data-mdb-ripple-color="dark">Enregistrer</button>

                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </form>
</div>
@endsection

