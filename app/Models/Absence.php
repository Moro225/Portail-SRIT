<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = [
        'user_id',
        'date_debut',
        'date_fin',
        'motif',
        'commentaire',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
