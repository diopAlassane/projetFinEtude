<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelerin extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'prenom',
        'nom',
        'date_nais',
        'passeport',
        'niveau_etude',
        'contact',
        'email',
        'langueParler',
        'situation_matrimonaile',
        'affinite',
        'adresse',
        'nom_conjoint',
        'contact_conjoint',
        'nombre_enfant',
        'profession'
    ];
}
