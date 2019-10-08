<?php

namespace App\Http\Controllers;

use App\Repositories\FilmsRepository;

use CounterFacade; 

      use Illuminate\Http\Request;
class FilmsController extends Controller
{
    //
    public function liste(Request $request, FilmsRepository $films)
    {

      $container=app(); // acceder au conteneur de service

      // dd($container); 
      // recuperation d'un service du container le service log
      $logger=$container->make('log') ; 

      // utilisation d'un service logger
      $logger->info('essai ecriture dans la log'); 


        $listefilms = $films::$liste;

        
      //   app()->bind('Counter', function(){

      //   return new Counter();

      // });
        

         // $count=app()->make('Counter')->getCounter($request); 

         // $count=app()->make('Counter')->getCounter($request); 
        $count=CounterFacade::getCounter($request); 

              // utilistauer du cahce interface
         $cache=app()->make('App\Classes\CacheInterface');
         $cache->set("info en cache");
         echo $cache->get(); 
        // // compteur de page
        // if ($request->session()->has('count')) {

        //     $count = $request->session()->get('count');

        // } else {

        //     $count = 0;
        // }

        // $count++;

        // $request->session()->put('count', $count);

// message information
        // $request->session()->put('message','ici mon message information');
        // :/ session flashbags
        $request->session()->flash('message', 'ici mon message information');
        // $request->session()->flash('status','info');

        return view('Films/liste', ['films' => $listefilms, 'count' => $count]);

    }
}
