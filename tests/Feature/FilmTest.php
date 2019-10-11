<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Mockery;

class FilmTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {

        // $response = $this->get('/admin/insert');  Retourne une 302 car user non identifié

        // Exécurte la route as user identifié
        //$user=User::where('id','=',2)->first();
        //$response = $this->actingAs($user)->get('/admin/insert');


        //Création d'un tableau
        $collection = new Collection;
        for ($i=0; $i<4;$i++){
            $collection->add((object)['titre'=>'Titre '.$i]);
        }
        //Création du mock
        $mock=Mockery::mock('Livres');
        //comportement du mock
        $mock->shouldReceive('all')->andReturn($collection);
        //injection du mock dans le container de services app qui va être invoqué au momonet de l'injection de dépendance
        $this->app->instance('Livres',$mock);

        $response = $this->get('/test/pierre/fr');
        $response->assertStatus(200);
        $response->dump();

       // $response->assertSeeText('RETOUR');
    }
}
