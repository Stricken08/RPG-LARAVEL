<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    // fonction pour afficher les persos du joueur sur une vue index
    public function index()
    {
        $user_id = Auth::id();
        $characters = Character::where('user_id', $user_id)->get();

        return view('character.index', compact('characters'));
    }
    public function view()
    {
        $user_id = Auth::id();
        $user_ids = Character::where('user_id', $user_id)->pluck('id')->toArray();
        $characters = Character::whereNotIn('id', $user_ids)->get();
        $users = User::pluck('pseudo', 'id');

        return view('character.showw', compact('characters', 'users'));
    }
    public function search(Request $request)
    {
        // Récupérez les valeurs des paramètres de recherche
        $nom = $request->input('nom');
        $specialty = $request->input('specialty');


        // Commencez à construire la requête de recherche
        $query = Character::query();

        // Appliquez les filtres de recherche sur les champs souhaités
        if ($nom) {
            $query->where('nom', 'like', "%$nom%");
        }

        if ($specialty) {
            $query->where('specialty', $specialty);
        }



        // Récupérez les résultats de la requête
        $characters = $query->get();

        // Passez les résultats à la vue appropriée
        return view('character.showw', compact('characters'));
    }

    // fonction pour afficher un perso unique sur une vue
    public function show(Request $request, $nom)
    {
        $character = Character::where('nom', $nom)->firstOrFail();
        return view('character.show', compact('character'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $magie = rand(0, 14);
        $force = rand(0, 14);
        $agilite = rand(0, 14);
        $intelligence = rand(0, 14);
        $PV = rand(20, 50);
        return view('character.create', compact('magie', 'force', 'agilite', 'intelligence', 'PV'));
    }

    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $description = $request->input('description');
        $speciality = $request->input('speciality');
        $magie = $request->input('magie');
        $force = $request->input('force');
        $agilite = $request->input('agilite');
        $intel = $request->input('intelligence');
        $PV = $request->input('PV');
        // Récupérer l'id de l'utilisateur connecté
        $user_id = Auth::id();
        $character = [

            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'specialty' => $request->input('speciality'),
            'FORCE' => $request->input('force'),
            'MAGIE' => $request->input('magie'),
            'AGILITE' => $request->input('agilite'),
            'INTEL' => $request->input('intelligence'),
            'PV' => $request->input('PV'),
            'user_id' => $user_id

        ];

        Character::create($character);
        return view('character.rendercreation', compact('nom', 'description', 'speciality', 'magie', 'force', 'agilite', 'intel', 'PV'));
    }
    public function reset()
    {
        // réinitialisez les statistiques de votre personnage ici
        return redirect()->back();
    }

    public function destroy($nom)
    {
        // Supprimer un utilisateur spécifique
        $character = Character::where('nom', $nom)->firstOrFail();
        $character->delete();
        return redirect()->route('character.index');
    }
}
