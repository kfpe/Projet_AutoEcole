<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence; 
use Illuminate\Validation\Rule; // Ajouté ici


class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agences = Agence::orderBy('created_at', 'desc')->paginate(12);
        return view('layout2.agences.index', compact('agences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout2.agences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'nom' => 'required|string|max:100',
            'ville' => 'required|string|max:60',
            'quartier' => 'nullable|string|max:80',
            'tel' => 'required|string|max:30|unique:agences,tel',
        ]);

         Agence::create($data);

        return redirect()->route('agences.index')->with('success', '✅ Agence ajoutée avec succès.');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return view('agences.show', compact('agence'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $agence = Agence::findOrFail($id);
        return view('layout2.agences.edit', compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $agence = Agence::findOrFail($id);
         $data = $request->validate([
            'nom' => 'required|string|max:100',
            'ville' => 'required|string|max:60',
            'quartier' => 'nullable|string|max:80',
            'tel' => [
                'required',
                'string',
                'max:30',
                Rule::unique('agences', 'tel')->ignore($agence->id),
            ],
        ]);

        $agence->update($data);

        return redirect()->route('agences.index')->with('success', '✅ Agence mise à jour.');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $agence = Agence::findOrFail($id);
          $agence->delete();
        return redirect()->route('agences.index')->with('success', '✅ Agence supprimée.');
    
    }
}
