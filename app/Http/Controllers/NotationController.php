<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notation;
use App\Models\User;
use App\Models\Universite;

class NotationController extends Controller
{
    public function index()
    {
        $notations = Notation::all();
        return view('notations.liste', compact('notations'));
    }

    public function create()
    {
        $users = User::all();
        $universites = Universite::all();
        return view('notations.create', compact('users', 'universites'));
    }

    public function store(Request $request)
{
   
    $score = $request->recherche + $request->competences + $request->expertise + $request->experience;

    $notation = new Notation();
    
    // Récupérer l'ID de l'utilisateur actuellement connecté
    $userId = auth()->id();

    $notation->user_id = $userId;
    $notation->universite_id = $request->universite_id;
    $notation->score = $score;
    $notation->commentaire = $request->commentaire;

    $notation->save();

    return redirect()->route('notations.index')->with('success', 'Notation ajoutée avec succès!');
}

    public function edit(Notation $notation)
    {
        $users = User::all();
        $universites = Universite::all();
        return view('notations.edit', compact('notation', 'users', 'universites'));
    }

    public function update(Request $request, Notation $notation)
    {
        $notation->score = $request->score;
        $notation->commentaire = $request->commentaire;

        $notation->save();
        return redirect()->route('notations.index')->with('success', 'Notation modifiée avec succès');
    }

    public function destroy(Notation $notation)
    {
        $notation->delete();
        return redirect()->route('notations.index')->with('success', 'Notation supprimée avec succès');
    }
}
