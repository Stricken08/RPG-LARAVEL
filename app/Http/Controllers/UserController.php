<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users/create');
    }
    public function store(Request $request)
    {

        $user = [

            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'pseudo' => $request->input('pseudo'),
            'email' => $request->input('email'),
            // 'password' => $request->input('password')
            'password' => bcrypt($request->input('password')) // Hashing the password
        ];

        User::create($user);
        return view('home');
    }
    public function loginForm()
    {
        return view('users.login');
    }
    public function loginForm2()
    {
        // Vérifier si l'utilisateur est déjà connecté
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('users.login');
    }

    public function login(Request $request)
    {
        // Récupération des informations du formulaire
        $credentials = $request->only('email', 'password');

        // Recherche de l'utilisateur dans la base de données
        $user = User::where('email', $credentials['email'])->first();

        // Vérification de l'existence de l'utilisateur et de son mot de passe
        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Si les informations de connexion sont valides, connectez l'utilisateur et stockez les informations dans la session
            session(
                [
                    'nom' => $user['nom'],
                    'prenom' => $user['prenom'],
                    'password' => $user['password'],
                    'pseudo' => $user['pseudo']
                ]
            );
            return view('home');
        }

        // Si les informations de connexion sont invalides, redirigez l'utilisateur vers la page de connexion avec un message d'erreur
        return redirect()->back()->withErrors(['message' => 'Adresse email ou mot de passe incorrect']);
    }

    public function login2(Request $request): RedirectResponse
    {
        // Valider les données de formulaire


        // Tentative de connexion de l'utilisateur
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function disconnect(Request $request)
    {
        // Supprimer toutes les données de la session
        $request->session()->flush();

        // Rediriger l'utilisateur vers la page de connexion
        return view('home');
    }

    public function disconnect2(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show()
    {


        return view('users.edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
