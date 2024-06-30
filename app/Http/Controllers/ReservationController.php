<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        // Affiche la liste des réservations
        return view('reservations.index');
    }

    public function create(){
        // Affiche le formulaire pour réserver un événement
        return view('reservations.create');
    }

    public function store(Request $request){
        // Validation des données
        $request->validate([
            'id_user' => 'required|',
            'id_evenement' => 'required',
        ]);

        // Sauvegarde de la réservation dans la base de données
        //...

        // Redirection vers la page d'accueil des réservations
        return redirect()->route('reservations.index')->with('success', 'Réservation créée avec succès.');
    
        }

    public function show($id){
        // Affiche la fiche détaillée d'une réservation
        //...
        return view('reservations.show', compact('id'));
    
        }

    public function edit($id){
        // Affiche le formulaire pour modifier une réservation
        //...
        return view('reservations.edit', compact('id'));
    }
}
