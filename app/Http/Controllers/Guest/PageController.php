<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //  All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.

    public function index()
    {
        return view('welcome');
    }

    public function movie()
    {
        // richiedo i dati dal db
        $movies = Movie::all();
        return view('partials.movie', compact('movies'));
    }
}
