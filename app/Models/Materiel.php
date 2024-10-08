<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_ordre',
        'departement',
        'designation',
        'categorie',
        'fournisseur',
        'prix_ht',
        'date_acquisition',
    ];
}
