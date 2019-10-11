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


//
// Permet de créer une route avec un paramètre.
Route::any('/essai/{nom?}/{prenom?}',function($nom='Toto',$prenom='titi'){
    return 'Hello '.$prenom.' '.$nom;
})->where(['nom'=>'[A-Z]+', 'prenom'=>'[a-z]+']);  // Permet de contrôler la variable via une regex. Si NOK -> 404


Route::get('/test/{nom}/{locale}', 'TestController@index');
Route::get('/resize', 'TestController@resizeImage');
//Route::get('/test/{nom}', 'TestController@redirection');

Route::get('/liste', 'FilmsController@liste');




Route::match(['get','post'],'/phpinfo',function(){
    phpinfo();
});


// on peut mettre des loggeurs partout
$container=app();   // permet d'accéder au conteneur du service

//        dd($container); // ici je peux voir tout le conteneur

// Récupération d'un service du container (ex : service log)
$logger=$container->make('log');

// utilisation d'un service logger (monolog)
$logger->info('essai écriture dans le log 2');


// Grouper les routes de l'admin
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/insert', ['as'=>'insert','uses'=>'AdminController@insert']);       // 'as' précise l'étiquette de la route dans une vue blade
    Route::get('/update:{id}', ['as'=>'update','uses'=>'AdminController@update']);
    Route::get('/delete:{id}', ['as'=>'delete','uses'=>'AdminController@delete']);
    Route::post('/valid', ['as'=>'valid','uses'=>'AdminController@valid'])->middleware('checkFilms');
    Route::post('/valid', ['as'=>'valid','uses'=>'AdminController@valid'])->middleware('checkFilms');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cache',function (){
   // Cache::put('info', 'mon info en cache', 30);
    Cache::store('database')->put('info', 'mon info en cache', 30);
});
Route::get('/recache',function (){
   // echo Cache::get('info');

    echo Cache::store('database')->get('info');
});
Route::get('httpcache', function(){
    return Response::make(date('h:i:s',time()))->setTtl(60); // Cache 1 minute
});


