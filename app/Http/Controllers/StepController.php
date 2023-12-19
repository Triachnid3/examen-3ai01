<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index()
    {
        $title = "Débugger d'une erreur Laravel";
        $description = "Bravo ! Vous avez réussi la première étape !";
        $next = "step2";
        $button = "Étape suivante";

        return view('step', compact('title', 'description', 'next', 'button'));
    }
    public function step2()
    {
        $title = "Nous sommes à l'étape 2";
        $description = "Si je ne me trompe pas, vous avez réussi la première étape ! Maintenant, je comprends pas pourquoi le bouton ne fonctionne pas pour passer à l'étape suivante...";
        $next = "step3";


        return view('step2', compact('title', 'description', 'next'));
    }
    public function step3()
    {
        $title = "Nous sommes à l'étape 3";
        $description = "Si je ne me trompe pas, vous avez réussi la première étape ! Maintenant, je comprends pas pourquoi le bouton ne fonctionne pas pour passer à l'étape suivante...";
        $next = "step3";
        $button = "Étape suivante";

        return view('step3', compact('title', 'description', 'next', 'button'));
    }
}
