<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelerin extends Model
{
    use HasFactory;

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
