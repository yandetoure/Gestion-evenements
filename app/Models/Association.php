<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Model
{
    use HasRoles;

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
