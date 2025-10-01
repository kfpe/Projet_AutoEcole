<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agence;
use App\Models\Administrateur;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $admins = User::where('role', 'Admin')->with('agence')->latest()->get();
        return view('layout2.administrateurs.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $agences = Agence::all();
        return view('layout2.administrateurs.create', compact('agences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
        'nom' => 'required|string|max:60',
        'prenom' => 'required|string|max:60',
        'sexe' => 'required|string|max:15',
        'adresse' => 'required|string',
        'email' => 'required|email|unique:users',
        'tel' => 'required|string|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'role' => 'required|in:Admin,Moniteur,Secrétaire,Élève',
        'agence_id' => 'required|exists:agences,id', // 🔴 obligatoire et doit exister
    ]);

    $data['password'] = bcrypt($data['password']);

    User::create($data);

        return redirect()->route('administrateurs.index')->with('success', '✅ Administrateur ajouté');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         
         $agences = Agence::all();

    $administrateur = User::where('role', 'Admin')
        ->with('agence')
        ->findOrFail($id); // Pas besoin de get() ici

    return view('layout2.administrateurs.edit', compact('administrateur', 'agences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

         $administrateur = User::where('role', 'Admin')
        ->with('agence')
        ->findOrFail($id);
        $data = $request->validate([
            'nom' => 'required|string|max:60',
            'prenom' => 'required|string|max:60',
            'sexe' => 'required|string',
            'adresse' => 'nullable|string',
            'email' => 'required|email|unique:users,email,' . $administrateur->id,
            'tel' => 'required|string|unique:users,tel,' . $administrateur->id,
            'agence_id' => 'required|exists:agences,id',
        ]);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $administrateur->update($data);

        return redirect()->route('administrateurs.index')->with('success', '✅ Administrateur mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

           $administrateur = User::where('role', 'Admin')
        ->with('agence')
        ->findOrFail($id);
           $administrateur->delete();
        return redirect()->route('administrateurs.index')->with('success', '🗑️ Administrateur supprimé');
    }
}
