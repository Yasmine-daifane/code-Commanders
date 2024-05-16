<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Prenom',
        'DateNais',
        'Adresse',
        'Metier',
        'Image',
        'Login',
        'Password',
    ];

    public function machines()
    {
        return $this->hasMany(Machines::class);
    }
    public function factures()
    {
        return $this->hasMany(Facture::class);
    }
    public function objectifs()
    {
        return $this->hasMany(Objectif::class);
    }
}

