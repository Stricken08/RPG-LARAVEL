<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{

    public function index()
    {

        $characters = Character::all();
        return view('character.index', compact('characters'));
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

        $character = [

            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'specialty' => $request->input('speciality'),
            'FORCE' => $request->input('force'),
            'MAGIE' => $request->input('magie'),
            'AGILITE' => $request->input('agilite'),
            'INTEL' => $request->input('intelligence'),
            'PV' => $request->input('PV'),
        ];

        Character::create($character);
        return view('character.rendercreation', compact('nom', 'description', 'speciality', 'magie', 'force', 'agilite', 'intel', 'PV'));
    }
    public function reset()
    {
        // réinitialisez les statistiques de votre personnage ici
        return redirect()->back();
    }
}
