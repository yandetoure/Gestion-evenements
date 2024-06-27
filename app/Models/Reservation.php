<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_evenement',
        'id_user',
        'statut'];

        public function user(){
            return $this->belongsTo(User::class);
        }

}
