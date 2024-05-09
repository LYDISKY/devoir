<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index(Request $request): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->admin) {
                return view('admin.dashboard');
            } else {
                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->route('login');
        }
    }
}


