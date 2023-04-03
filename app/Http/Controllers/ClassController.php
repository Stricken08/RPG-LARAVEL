<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function warrior()
    {
        return view('class.warrior');
    }

    public function mage()
    {
        return view('class.mage');
    }

    public function druide()
    {
        return view('class.druide');
    }

    public function assassin()
    {
        return view('class.assassin');
    }

    public function berserker()
    {
        return view('class.berserker');
    }

    public function archer()
    {
        return view('class.archer');
    }
}
