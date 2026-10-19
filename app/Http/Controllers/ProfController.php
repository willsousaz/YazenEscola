<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfController extends Controller
{
    public function dashboard(){

        return view('professor.dashboard');

    }

    public function frequencia(){

        return view('professor.frequencia');

    }

    public function notas(){

        return view('professor.notas');

    }

    public function planoIntervencao(){

        return view('professor.plano-intervencao');

    }

    public function aee(){

        return view('professor.aee');

    }
}
