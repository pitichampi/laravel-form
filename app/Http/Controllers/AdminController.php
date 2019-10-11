<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Kris\LaravelFormBuilder\FormBuilder;  //plus besoin car on utilise le trait
use App\Forms\FilmsForm;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Models\Films;
use App\Http\Requests\StoreFilms;
use Illuminate\Support\Facades\Gate;
use Auth;

class AdminController extends Controller
{
    //

    use FormBuilderTrait;
    public function insert(){
        $valid=Gate::allows('insert-films');

        if(!$valid){
            dd('erreur ! interdit for you insert');
        }
        $form=$this->form(FilmsForm::class, [
            'method'=>'POST',
            'url'=>route('valid')
        ]);
        $form->add('submit','submit',['label'=>'Insérer un film']);
        return view('Admin.create', compact('form'));
    }
    public function delete($id){

    }
    public function update($id){

        //utilisation des policies
        $film = Films::where('id','=',$id)->first();
        if(!Auth::user()->can('update',$film)){
            dd('erreur policies');
        }

        // Utilisation des gates
//        $valid=Gate::allows('update-film',$id);

/*        if(!$valid){
            dd('erreur ! interdit for you update');
        } else {
            dd('korrrrrekt :)');
        }*/

//$this->authorize('update-film',$id);

$film=Films::where('id','=',$id)->first();
        echo Auth::user()->id;


        $this->form(FilmsForm::class, [
            'method'=>'POST',
            'url'=>route('valid')
        ]);

    }

    public function valid(StoreFilms $request){
        $form=$this->form(FilmsForm::class);
        if(!$form->isValid()){
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $params=$this->form(FilmsForm::class)->getFieldValues();

        //Récupération de l'image
        $img=$params['img'];
        $imgname=$img->getClientOriginalName();
        $img->move(public_path('img'),$imgname);
        $params['img']=$imgname;

        //fill remplit les propriétés avec les valeurs de params
        $film = new Films;
        $film->fill($params)->save();
        return redirect()->action('FilmsController@liste')->with([
            'status'=> 'success',
            'message'=>'Un nouveau film a été inséré'
        ]);
    }

}
