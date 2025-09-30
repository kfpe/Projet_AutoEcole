<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Visiteur;
use App\Models\Service;
use App\Models\User;
use App\Models\Agence; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller


{



public function create()
{
    $agences = Agence::all();
    return view('layout1.askservices', compact('agences'));
}



    
    public function store(Request $request)
    {
        // règles de validation (ajuste selon besoins)
        $rules = [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'sexe' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:30',
            'libelle' => 'required|string',
            'mot_de_passe' => 'required|string|min:6|confirmed', // mot_de_passe_confirmation attendu
            'agence_id' => 'required|exists:agences,id',
            'num_anc' => 'string|max:255',
            'piece' => 'string|max:255',
            'motif' => 'string|max:255',
            'experiences' => 'string|max:255',
            'permis' => 'string|max:255',
            'certificat' => 'string|max:255',
            'capacite' => 'string|max:255',
            'exigences' => 'string|max:255',
            'duree' => 'string|max:255',
            'formalite' => 'string|max:255'
           
        ];

        $request->validate($rules);

        DB::beginTransaction();

        try {
           // 1) Création de l'utilisateur
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'sexe' => $request->sexe,
                'adresse' => $request->adresse,
                'email' => $request->email,
                'tel' => $request->telephone,
                'password' => Hash::make($request->mot_de_passe),
                'role' => 'visiteur',
                'agence_id' => $request->agence_id 

               

            ]);

             // 2) Création du visiteur lié à l'utilisateur
            $visiteur = Visiteur::create([
                'num_permis' => $request->num_permis ?? null,
                'user_id' => $user->id,
                'num_anc'  => $request->num_anc,
                'piece'  => $request->piece,
                'motif'  => $request->motif,
                'experiences'  => $request->experiences,
                'permis'  => $request->permis,
                'certificat'  => $request->certificat,
                'capacite'  => $request->capacite,
                'exigences'  => $request->exigences,
                'duree'  => $request->duree,
                'formalite'  => $request->formalite
                
            ]);

            // 3) Création du service lié au visiteur
            $service = Service::create([
                'libelle' => $request->libelle,
                'description' => $request->description ?? "Demande de service : " . $request->libelle,
                'etat' => 'en_attente',
                'visiteur_id' => $visiteur->id,
            ]);

           

            

            DB::commit();

            return redirect()->back()->with('success', 'Votre demande a été enregistrée avec succès.');

        } catch (\Exception $e) {
            DB::rollBack();
            // log l'erreur dans storage/logs/laravel.log pour debug
            return back()->withErrors('Erreur : ' . $e->getMessage())->withInput();
        }
    }
}


