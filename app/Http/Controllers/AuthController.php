<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
        //on retourne la view avec les inputs
    }
    public function authenticate(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);//au submit, on verifie les champs name et password

        if(auth()->attempt($request->only('name', 'password'))){
            return redirect()->route('dashboard');
        }//si le name et le password correspondent à la bdd, alors on retourne sur dashboard
        return redirect()->back()->withErrors('identifiants incorrects');
        //sinon on indique une erreur
    }
    public function logout() {
        auth()->logout();
        //on se déconnecte et retourne sur la page login
        
        return redirect()->route('login');
    }
}
