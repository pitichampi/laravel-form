<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\FilmsRepository;
class FilmsController extends Controller
{
    //
    function liste(Request $request){
    $films=FilmsRepository::$liste;

    if ($request->session()->has('count')){
        $count = $request->session()->get('count');
    }
    else{
        $count=0;
    }
    $count++;
    $request->session()->put('count',$count);

        return view('Films/liste',['films' => $films,'count'=>$count]);
    }
}
