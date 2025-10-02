<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agence;
use App\Models\Administrateur;

class SuperAdminController extends Controller
{
      public function index()
    {
        $nbAgences = Agence::count();
        $nbAdmins = User::where('role', 'Admin')->count();
        // si tu veux d’autres compteurs plus tard, tu les ajoutes ici

        return view('layout2.superAdmin.superAdmin', compact('nbAgences', 'nbAdmins'));
    }
}
