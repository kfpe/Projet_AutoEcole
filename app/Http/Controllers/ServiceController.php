<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Visiteur;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function store(Request $request)
    {

        // 1. Validation des données
        $request->validate([
            'prenom' => 'required|string|max:100',
            'nom' => 'required|string|max:100',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'email' => 'required|email|unique:utilisateurs,email', // vérifier dans utilisateurs !
            'telephone' => 'required',
            'mot_de_passe' => 'required|string|min:6|confirmed', // password + confirmation
            'libelle' => 'required',
            'description' => 'nullable|string',
        ]);

        // 2. Création de l'utilisateur
        $utilisateur = Utilisateur::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'sexe' => $request->sexe,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'mot_de_passe' => bcrypt($request->mot_de_passe), // hash du mot de passe
            'role' => 'visiteur', // par défaut
            'agence_id' => null,
        ]);

        // 3. Création du visiteur lié à cet utilisateur
        $visiteur = Visiteur::create([
            'num_permis' => $request->numpermis, // tu peux mettre un champ du formulaire si besoin
            'utilisateur_id' => $utilisateur->id,
        ]);

        // 4. Création du service lié à ce visiteur
        Service::create([
            'libelle' => $request->libelle,
            'description' => $request->description,
            'etat' => 'en attente',
            'visiteur_id' => $visiteur->id,
        ]);

        // 5. Retour avec message
        return redirect()->back()->with('success', 'Votre demande de service a été enregistrée !');
    }
}


