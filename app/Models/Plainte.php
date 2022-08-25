<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelerin_id',
        'description',
        'date_emission'
    ];
}
