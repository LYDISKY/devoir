<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\Universite;

use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    public function index(){
        $universites = Universite::all();
        return view('universites.liste', compact('universites'));
    }

    public function create()
    {
        return view('universites.create');
    }

    public function store(Request $request)
{

    // Créer une nouvelle instance de l'université
    $universite = new Universite();
    $universite->nom = $request->nom;
    $universite->localisation = $request->localisation;
    $universite->description = $request->description; // Ajouter la description
    // Gérer le téléchargement du logo s'il est présent
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->storePublicly('logos', 'public');
        $universite->logo = $logoPath;
    }

    // Sauvegarder l'université dans la base de données
    $universite->save();

    // Rediriger avec un message de succès
    return redirect()->route('universites.index')->with('success', 'Université ajoutée avec succès!');
}

    public function edit($id)
    {
        $universite = Universite::find($id);
        return view('universites.edit', compact('universite'));
    }

    public function update(Request $request, $id)
    {
        $universite = Universite::find($id);
        $universite->nom = $request->nom;
        $universite->localisation = $request->localisation;
        $universite->description = $request->description;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $universite->logo = $logoPath;
        }

        $universite->save();

        return redirect()->route('universites.index')->with('success', 'Université mise à jour avec succès');
    }

    public function delete(Universite $universite)
    {
        $universite->delete();
        return redirect()->route('universites.index')->with('success', 'Université supprimée avec succès!');
    }
}
