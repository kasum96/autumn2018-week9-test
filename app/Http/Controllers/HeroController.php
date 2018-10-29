<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index($hero_name) 
    {
        $heros = \App\Hero::where('name', $hero_name)->get();

        if (!$heros) {
            abort(404, 'Hero not found');
        }
        

        $view = view('hero/index', [$heros]);
        return $view;
    }
}
