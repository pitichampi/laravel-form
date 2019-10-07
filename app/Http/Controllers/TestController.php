<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index($nom){
        return Response('Hello ici contrôleur '.$nom);
    }
}
