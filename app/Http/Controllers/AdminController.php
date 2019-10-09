<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Kris\LaravelFormBuilder\FormBuilder;  //plus besoin car on utilise le trait
use App\Forms\FilmsForm;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Models\Films;

class AdminController extends Controller
{
    //

    use FormBuilderTrait;
    public function insert(){
        $form=$this->form(FilmsForm::class, [
            'method'=>'POST',
            'url'=>route('valid')
        ]);
        $form->add('submit','submit',['label'=>'Insérer un film']);
        return view('Admin.create', compact('form'));
    }
    public function delete($id){

    }
    public function update($idcomposer){
        $this->form(FilmsForm::class, [
            'method'=>'POST',
            'url'=>route('valid')
        ]);

    }

    public function valid(){
        $params=$this->form(FilmsForm::class)->getFieldValues();

        //Récupération de l'image
        $img=$params['img'];
        $imgname=$img->getCLientOriginalName;
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
