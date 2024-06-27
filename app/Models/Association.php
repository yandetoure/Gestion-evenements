<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Association extends Model
{

    protected $fillable = [
        'id',
        'nom',
        'description',
        'logo',
        'lieu',
        'secteur_activite',
        'ninea',
        'numero',
        'date_creation',
        'statut',
        'email',
        'password',
    ];
    use HasFactory;
    public function evenement(){
        return $this->HasMany(Evenement::class);
    }
}
