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

    //message d'informations

       //avec une variable de session standard
        //        $request->session()->put('message','ici mon information');

        //avec une variable de session 'flash'

        $request->session()->flash('message','ici mon information');
        $request->session()->flash('status','visibility');

        return view('Films/liste',['films' => $films,'count'=>$count]);
    }
}
