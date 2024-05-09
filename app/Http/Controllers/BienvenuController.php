<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Universite;

class BienvenuController extends Controller
{
    public function index()
    {
        $universities = Universite::all();
        return view('pages.bienvenue', compact('universities'));
    }
}
