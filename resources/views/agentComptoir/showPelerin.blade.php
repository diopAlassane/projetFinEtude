{{-- @extends('layouts.master')
@section('content') --}}
<div id="layoutSidenav_content" class="container bg-success">
    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
            <ul>
                <h1>Informations personnnelles:</h1>
                <li>
                    <p>Prenom : {{$pelerin['prenom']}}</p>
                </li>
                <li>
                    <p>Nom : {{$pelerin['nom']}}</p>
                </li>
                <li>
                    <p>Date de naissance : {{$pelerin['date_nais']}}</p>
                </li>
                <li>
                    <p>Numéro passeport : {{$pelerin['passeport']}}</p>
                </li>
                <li>
                    <p>Contact : {{$pelerin['contact']}}</p>
                </li>
                <li>
                    <p>Affinité : {{$pelerin['affinite']}}</p>
                </li>
                <li>
                    <p>Email : {{$pelerin['email']}}</p>
                </li>
                <li>
                    <p>Niveau d'étude : {{$pelerin['niveau_etude']}}</p>
                </li>
                <li>
                    <p>Langue parlée : {{$pelerin['langueParler']}}</p>
                </li>
                <li>
                    <p>Situation matrimoniale : {{$pelerin['situation_matrimonaile']}}</p>
                </li>
                <li>
                    <p>Adresse : {{$pelerin['adresse']}}</p>
                </li>
            </ul>

            <ul>
                <h1>Personne à contacter en cas d'urgence:</h1>
                <li>
                    <p>Nom au complet : {{$pelerin['nom_conjoint']}}</p>
                </li>
                <li>
                    <p>Contact : {{$pelerin['contact_conjoint']}}</p>
                </li>
            </ul>

            <ul>
                <h1>Informations supplementaires:</h1>
                <li>
                    <p>Nombre d'enfants : {{$pelerin['nombre_enfant']}}</p>
                </li>
                <li>
                    <p>Proféssion : {{$pelerin['profession']}}</p>
                </li>
            </ul>

        </div>
    </section>
</div>
{{-- @endsection --}}
