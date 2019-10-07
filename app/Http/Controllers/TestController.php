<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Repositories\FilmsRepository;

class TestController extends Controller
{
    //
    function index($nom, Request $request){
        echo $request->fullUrl();       // récupération de la requête
$request->session()->put('id', '1234');     // création d'une var de session


        return redirect()->action('TestController@redirection',['nom'=>$nom]);  // redirection vers un autre contrôleur

        return Response('Hello ici contrôleur '.$nom);

    }

    function  redirection($nom,Request $request){
        $id=$request->session()->get('id');     // récupération d'une var de session
        return Response("Ma var = $id");
    }
}
