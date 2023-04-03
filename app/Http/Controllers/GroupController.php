<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {

        $groups = Group::all();
        return view('group.index', compact('groups'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('group.create');
    }

    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $description = $request->input('description');
        $places = $request->input('places');


        $group = [

            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'places' => $request->input('places'),
        ];

        Group::create($group);
        return view('group.rendercreation', compact('nom', 'description', 'places'));
    }
}
