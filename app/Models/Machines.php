<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomMachine',
        'capaciteMachine',
        'quantiteEau',
        'utilisateur_id'
    ];

    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
