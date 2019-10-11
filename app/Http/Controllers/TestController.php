<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class TestController extends Controller
{
    //
    function index($nom, Request $request,$locale)
    {

        // accès au container
        App::setlocale($locale);
        echo __('messages.welcome');

        // trest dans la vue liste
        return view('Films/liste');



        //echo $request->nom;
        /* echo $request->query('info');
          // variables de sessions

         $request->session()->put('userid', '1234');
          // redirection
          return redirect()->action('TestController@redirection', ['nom'=>$nom]);

              return Response('{ "texte": "Hello ici controleur test'.$nom.'"}', 301)->header('Content-Type', 'text/plain');
          */



    }
    function redirection($nom, Request $request)
    {

    	// affichage de la var de session
    	$userid=$request->session()->get('userid');
    	return Response("mon userid : $userid mon nom : $nom");

    }
}
