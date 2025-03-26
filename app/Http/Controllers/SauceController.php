<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;


class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces.index', compact('sauces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sauces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'manufacturer' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        Sauce::create($request->all());

        return redirect()->route('sauces.index')
                        ->with('sucess', 'sauce mise à jour avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $sauce)
    {
        $sauce = Sauce::findOrFail($sauce);
        return view('sauces.show', compact('sauce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.edit', compact('sauce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'manufacturer' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
    
        $sauce = Sauce::find($id);
    
        // Mise à jour de la sauce avec gestion manuelle de updated_at
        $sauce->update([
            'name' => $request->input('name'),
            'manufacturer' => $request->input('manufacturer'),
            'description' => $request->input('description'),
            'mainPepper' => $request->input('mainPepper'),
            'imageUrl' => $request->input('imageUrl'),
            'heat' => $request->input('heat'),
            'updated_at' => now() // Ajoute l'heure actuelle pour le champ updated_at
        ]);
    
        return redirect()->route('sauces.index')
                         ->with('success', 'Sauce mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sauce = Sauce::find($id);
        $sauce->delete();
        return redirect()->route('sauces.index')
                            ->with('success', 'Sauce supprimée avec succès');
    }
}
