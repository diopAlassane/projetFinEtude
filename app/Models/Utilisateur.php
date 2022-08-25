<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'date_nais',
        'sexe',
        'adresse',
        'contact',
        'numero_cni',
        'type'
    ];
}
