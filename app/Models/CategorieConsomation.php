<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieConsomation extends Model
{
    use HasFactory;
    protected $fillable = [
     'nomCategorie',
     'descriptionCategorie',
     'consommationRecommandee'
    ];
    public function eau_consommations()
    {
        return $this->hasMany(EauConsomation::class);
    }
}
