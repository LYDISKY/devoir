<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Universite;

class AutrePageController extends Controller
{
    public function index()
    {
        $universites = Universite::all();
        return view('pages.liste_universites', compact('universites'));
    }
}
