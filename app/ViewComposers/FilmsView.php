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
use DB;
use PDO;
use App\Scopes\FilmsScope;
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
        //$listefilms = Films::all();  //récupère toutes les données de la table films - Pas besoin d'utiliser la méthode get pour ce cas.
        //$listefilms = Films::orderby('annee','desc')->orderby('titre','asc')->get();  // un peu de tri. Attention ! il faut utiliser la méthode get.
        //$listefilms = Films::where('annee',2010)->orderby('titre','asc')->get();  // where
        //$listefilms = Films::where('annee',2010)->orderby('titre','asc')->first();  // first au lieu de get. Attention ne retourne pas un tableau d'objets mais l'objet directement.
        //$listefilms = Films::where('titre','like','%tour%')->orderby('titre','asc')->get();  // first au lieu de get. Attention ne retourne pas un tableau d'objets mais l'objet directement.

        //Pour des requêtes plus complexes : façade DB.
        //    $listefilms=DB::table('films')->select('*')->orderby('annee')->get();
        // Par contre la réponse retournée n'est plus un tableau associatif. Attention donc.

        // Une requête standard !
        //$listefilms=DB::select(DB::raw("SELECT * FROM films WHERE annee >= 2010"));
        // Ce coup-ci pas besoin de get. Par contre penser au use DB !

        // Une méthode qui ne change pas le type de réponse (retourne bien un tableau associatif :
        //$filmsData=DB::connection()->getPDO()->query('select * from films');
        //$listefilms=$filmsData->fetchAll(PDO::FETCH_ASSOC);
        // Attention rajouter un use PDO en plus du use DB. En fait on utilise simplement l'objet PDO standard.

        //$listefilms = Films::with('immatriculations')->get();   // évite un lazy load lorsque l'on veut récupérer les jointures. Il faut mettre la propriété et non la méthode. Il faut donc mettre une minuscule.

        //Désctivation du scope
        //$listefilms = Films::withoutGlobalScope(FilmsScope::class)->with('immatriculations')->get();


        //Utilisation en plus d'un scope local
        $listefilms = Films::withoutGlobalScope(FilmsScope::class)->films()->with('immatriculations')->get();


        $count=CounterFacade::getCounter($this->request);
        $view->with(['films' => $listefilms, 'count' => $count]);




    }
}
