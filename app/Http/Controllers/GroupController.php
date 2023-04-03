<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $user_id = Auth::id();

        $group = [

            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'places' => $request->input('places'),
            'user_id' => $user_id
        ];

        Group::create($group);
        return view('group.rendercreation', compact('nom', 'description', 'places'));
    }
}
