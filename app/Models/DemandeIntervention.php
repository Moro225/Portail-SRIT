<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeIntervention extends Model
{
    protected $table = 'demandes_intervention';

    protected $fillable = [
        'ufr_direction',
        'service_departement',
        'nom_complet',
        'email',
        'telephone',
        'objet',
        'message',
        'statut',
    ];
}
