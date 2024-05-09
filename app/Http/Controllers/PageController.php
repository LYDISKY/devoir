<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notation;
use App\Models\User;
use App\Models\Universite;

class PageController extends Controller
{
    public function index()
    {
        $notations = Notation::all();
        return view('pages.liste_notations', compact('notations'));
    }

    public function create()
    {
        $users = User::all();
        $universites = Universite::all();
        return view('pages.ajout_notation', compact('users', 'universites'));
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

    return redirect()->route('user_home')->with('success', 'Notation ajoutée avec succès!');
}

}
