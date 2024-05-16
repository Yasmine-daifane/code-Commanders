<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomObjectif',
        'descriptionObjectif',
        'pourcentagepreferer',
        'achieve',
        'utilisateur_id'
    ];

    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
