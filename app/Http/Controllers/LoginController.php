<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dump($credentials);
        // die;
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            // Obtenha os dados do usuário autenticado
            $user = Auth::user();

            // Armazene os dados do usuário na sessão
            $request->session()->put('user', $user);

            $request->session()->put('public_user', $user);


            return redirect()->intended('/painel-cliente');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();

        // Redirecione para a página inicial ou outra página apropriada após o logout
        return redirect('/');

    }
}