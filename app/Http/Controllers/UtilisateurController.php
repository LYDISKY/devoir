<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('utilisateurs.liste', compact('utilisateurs'));
    }

    public function create()
    {
        return view('utilisateurs.create');
    }

    public function store(Request $request)
    {
        $utilisateur = new Utilisateur();
        $utilisateur->nom = $request->nom;
        $utilisateur->email = $request->email;
        $utilisateur->mot_de_passe = bcrypt($request->mot_de_passe);
    
        $utilisateur->save();
    
        return redirect()->route('utilisateurs.index')->with('success', 'Utilisateur ajouté avec succès!');
    }

    public function edit($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        return view('utilisateurs.edit', compact('utilisateur'));
    }

    public function update(Request $request, $id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->update($request->all());

        return redirect()->route('utilisateurs.index');
    }

    public function destroy($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->delete();

        return redirect()->route('utilisateurs.index');
    }

}
