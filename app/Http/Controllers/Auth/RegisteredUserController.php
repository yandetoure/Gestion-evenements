<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'adresses' => 'required',
            'date_de_naissance' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
    
        // Créer l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'adresses' => $request->adresses,
            'date_de_naissance' => $request->date_de_naissance,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);
    
        // Assigner le rôle à l'utilisateur créé
        $user->assignRole('User'); // Assurez-vous d'avoir une méthode pour assigner le rôle dans votre modèle User, ou utilisez directement Eloquent.
    
        // Déclencher l'événement d'inscription
        event(new Registered($user));
    
        // Authentifier l'utilisateur
        Auth::login($user);
    
        // Rediriger l'utilisateur vers le tableau de bord
        return redirect(route('dashboard', [], false));
    }
}    
