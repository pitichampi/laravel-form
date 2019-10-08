<?php

namespace App\Http\Controllers;

use App\Repositories\FilmsRepository;
use Illuminate\Http\Request;
use App\Providers\MonServiceProvider;



class FilmsController extends Controller
{
    //
    function liste(Request $request, FilmsRepository $films)
    {
        $listefilms = $films::$liste;

       //  $count->app()->make('Counter');

       // return view('Films/liste', ['films' => $films, 'count' => $count]);
        return view('Films/liste', ['films' => $films]);

    }
}
