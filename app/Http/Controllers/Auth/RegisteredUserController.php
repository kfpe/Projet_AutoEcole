<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Candidat;
use App\Models\Secretaire;
use App\Models\Moniteur;
use App\Models\Agence;
use App\Models\Formation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        $agences = Agence::all();
        $formations = Formation::all();
        return view('auth.register', compact('agences', 'formations'));
    }

    /**
     * Handle an incoming registration request.
     */
    public function store(Request $request)
    {
        $rules = [
            'nom' => ['required', 'string', 'max:60'],
            'prenom' => ['required', 'string', 'max:60'],
            'sexe' => ['required', 'string', 'max:15'],
            'adresse' => ['required', 'string'],
            'tel' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['required', 'in:admin,candidat,secretaire,moniteur'],
            'agence_id' => ['required', 'integer', 'exists:agences,id'],
            'terms' => ['accepted'],
        ];

        if ($request->role === 'candidat') {
            $rules['formation_id'] = ['required', 'integer', 'exists:formations,id'];
        }

        $request->validate($rules);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'agence_id' => $request->agence_id,
        ]);

        switch ($request->role) {
            case 'admin':
                Admin::create(['user_id' => $user->id]);
                break;
            case 'candidat':
                Candidat::create([
                    'user_id' => $user->id,
                    'formation_id' => $request->formation_id,
                    // Les autres champs (date_nais, lieu_nais, etc.) sont laissés NULL
                ]);
                break;
            case 'secretaire':
                Secretaire::create(['user_id' => $user->id]);
                break;
            case 'moniteur':
                Moniteur::create(['user_id' => $user->id]);
                break;
        }

        event(new Registered($user));

        Auth::login($user);

        // Redirection spécifique par rôle
        $redirects = [
            'admin' => route('dashboardAdmin'),
            'candidat' => route('dashboardCandidat'),
            'secretaire' => route('dashboardMoniteur'),
            'moniteur' => route('dashboardMoniteur'),
        ];

        return redirect($redirects[$user->role] ?? '/dashboard');
    }
}
