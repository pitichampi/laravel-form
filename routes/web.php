<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
//Route::get('/', function () {
//
//    echo env('APP_AUTHOR');
//    print_r($_ENV);
//    echo config('app.timezone');
//    config(['app.timezone'=>'Europe/paris']);
//    echo config('app.timezone');
//
//    return view('welcome');
//});



Route::match(['get','post'],'/phpinfo',function(){
    phpinfo();
});

//
// Permet de créer une route avec un paramètre.
Route::any('/essai/{nom?}/{prenom?}',function($nom='Toto',$prenom='titi'){
    return 'Hello '.$prenom.' '.$nom;
})->where(['nom'=>'[A-Z]+', 'prenom'=>'[a-z]+']);  // Permet de contrôler la variable via une regex. Si NOK -> 404


Route::get('/test/{nom}', 'TestController@index');
Route::get('/test/{nom}', 'TestController@redirection');
