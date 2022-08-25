<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelerin_id',
        'observation',
        'prescription',
        'date_prescription',
        'date_rendez_vous'
    ];
}
