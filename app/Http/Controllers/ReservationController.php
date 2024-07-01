<?php
namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create(Evenement $evenement)
    {
        $user = Auth::user();
        return view('reservations.create', compact('evenement', 'user'));
    }

    public function store(Request $request, Evenement $evenement)
    {
        $user = Auth::user();

        Reservation::create([
            'user_id' => $user->id,
            'evenement_id' => $evenement->id,
            'statut' => 'acceptée', // Valeur par défaut
        ]);

        // Envoyer l'email de confirmation ici si nécessaire

        return redirect()->route('reservations.create', ['evenement' => $evenement->id])
            ->with('success', 'Votre réservation a été confirmée.');
    }
}

