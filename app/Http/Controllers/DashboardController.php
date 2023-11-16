<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function index()
    {
       // Recupere os dados do usuário da sessão
       $userData = Session::get('user');

       // Faça algo com os dados do usuário
       // Por exemplo, passe os dados para a view
       return view('clientdashboard', ['userData' => $userData]);
   }
    }
