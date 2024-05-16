<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EauConsommation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomConsommation',
        'descriptionConsommation',
        'dateConsommation',
        'quantiteConsommation',
    ];

    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    public function categorie_consomations()
    {
        return $this->belongsTo(CategorieConsomation::class);
    }
}
