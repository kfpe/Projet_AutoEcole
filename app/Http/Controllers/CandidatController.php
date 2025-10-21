<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function profile()
    {
        return view('layout3.candidat.profile');
    }
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        if ($user->role !== 'candidat') {
            abort(403, 'Accès non autorisé.');
        }

        $rules = [
            'nom' => ['required', 'string', 'max:60'],
            'prenom' => ['required', 'string', 'max:60'],
            'sexe' => ['required', 'string', 'max:15'],
            'adresse' => ['required', 'string'],
            'tel' => ['required', 'string', 'unique:users,tel,' . $user->id],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'date_nais' => ['nullable', 'date'],
            'lieu_nais' => ['nullable', 'string', 'max:30'],
            'nom_pere' => ['nullable', 'string', 'max:30'],
            'nom_mere' => ['nullable', 'string', 'max:30'],
            'statut' => ['nullable', 'in:solvable,insolvable'],
            'photo' => ['nullable', 'image', 'max:2048'],
        ];

        $request->validate($rules);

        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
        ]);

        $data = [];
        if ($request->filled('date_nais')) {
            $data['date_nais'] = $request->date_nais;
        }
        if ($request->filled('lieu_nais')) {
            $data['lieu_nais'] = $request->lieu_nais;
        }
        if ($request->filled('nom_pere')) {
            $data['nom_pere'] = $request->nom_pere;
        }
        if ($request->filled('nom_mere')) {
            $data['nom_mere'] = $request->nom_mere;
        }
        if ($request->filled('statut')) {
            $data['statut'] = $request->statut;
        }
        if ($request->hasFile('photo')) {
            if ($user->candidat->photo) {
                Storage::disk('public')->delete($user->candidat->photo);
            }
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        if (!empty($data)) {
            $user->candidat->update($data);
        }

        return redirect()->route('candidat.profile')->with('success', 'Profil mis à jour avec succès.');
    }
}
