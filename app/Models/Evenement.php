<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{    use HasFactory;
    protected $fillable = ['id', 'nom','description', 'lieu', 'date_evenement', 'heure_debut', 'heure_fin', 'date_cloture_inscription', 'image', 'nombre_places', 'categorie'];

     // Définition des valeurs ENUM
     public static $enumcategorie = ['Art', 'Technologie', 'Sport', 'Santé', 'Éducation','Music','Conférences','Économie','Culture'];

    public function association(){
        return $this->belongsTo(Association::class);
    }
}
