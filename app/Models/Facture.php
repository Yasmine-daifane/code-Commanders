<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'montantFacture',
        'dateFacture',
        'image',
        'quantite',
        'utilisateur_id'
    ];

    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
