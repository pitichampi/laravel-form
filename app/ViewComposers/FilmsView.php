<?php
/*
  Created by Pierre Bernardeau.
  For Influa
  Date: 08/10/2019
  Time: 16:30

        _
    ,--'_`--.
  ,/( \   / )\.
 //  \ \_/ /  \\
|/___/     \___\|
((___       ___))    Join the Empire !!!  ﴾̵ ̵◎̵ ̵﴿
|\   \  _  /   /|
 \\  / / \ \  //
  `\(_/___\_)/'
    `--._.--'

 */

namespace App\ViewComposers;
use Illuminate\Http\Request;
use Illuminate\View\View;
//use App\Repositories\FilmsRepository;
use App\Models\Films;


use App\Facades\CounterFacade;
class FilmsView
{
    private $request;
    public function __construct(Request $request)
    {
     $this->request=$request;
    }

    public function compose(View $view){

        //$listefilms=FilmsRepository::$liste;
        $listefilms = Films::all();  //récupère toutes les données de la table films
        $count=CounterFacade::getCounter($this->request);
        $view->with(['films' => $listefilms, 'count' => $count]);




    }
}
