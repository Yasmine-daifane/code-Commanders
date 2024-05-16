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

    public function consomationEau()
    {
        return $this->hasMany(ConsomationEau::class);
    }
}

