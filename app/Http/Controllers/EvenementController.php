<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
    {
        public function index()
        {
            $evenements = Evenement::all();
            return view('layouts.events.index ', compact('evenements'));
    }

    public function create(){
        return view('layouts.events.create');
    }

    public function store(Request $request){
        // Validation
        $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
            'lieu' => 'required|date',
            'date_evenement' => 'required|integer',
            'heure_debut' => 'required|max:255',
            'heure_fin' => 'required|max:255',
            'date_cloture_inscription' => 'required|max:255',
            'image' => 'required|max:255',
            'nombre_places' => 'required|max:255',
            'categorie' => 'required|in:' . implode(',', Evenement::$enumcategorie),
        ]);

        // Sauvegarde de l'événement dans la base de donnees
        Evenement::create($request->all());
        // Redirection vers la page d'accueil des événements
        return redirect()->route('events.index')->with('success', 'Événement créé avec succes.');
    }

    public function show(Evenement $evenement){
        return view('events.show', compact('evenement'));
    }

    public function edit(Evenement $evenement){
        return view('events.edit', compact('evenement'));
    }

    public function update(Request $request, Evenement $evenement){
        // Validation
        $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
            'lieu' => 'required|date',
            'date_evenement' => 'required|integer',
            'heure_debut' => 'required|max:255',
            'heure_fin' => 'required|max:255',
            'date_cloture_inscription' => 'required|max:255',
            'image' => 'required|max:255',
            'nombre_places' => 'required|max:255',
            'categorie' => 'required|in:' . implode(',', Evenement::$enumcategorie),
        ]);

        // Mise à jour de l'événement dans la base de données
        $evenement->update($request->all());
        // Redirection vers la page d'accueil des événement
        return redirect()->route('events.index')->with('success', 'Événement modifié avec succès.');
    
        }

    public function destroy(Evenement $evenement){
        // Suppression de l'événement dans la base de données
        $evenement->delete();
        // Redirection vers la page d'accueil des événements
        return redirect()->route('events.index')->with('success', 'Événement supprimé avec succès.');
    
    }
}