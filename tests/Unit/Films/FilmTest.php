<?php

namespace Tests\Unit\Films;

use App\Models\Films;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class FilmTest extends TestCase
{

    public function setUp(): void   // S'exécute au début des tests
    {
        parent::setUp();
        require __DIR__.'/../../../vendor/autoload.php';
        DB::beginTransaction();
    }

    public function tearDown():void     // S'exécute à la fin des tests
    {
        DB::rollBack();
        parent::tearDown();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testFilm()
    {
        // Création d'un film
        $film=new Films;
        foreach($film->getFillable() as $propriete){
            if($propriete=='annee'){
                $film->$propriete=2019;
            } elseif($propriete=='user_id'){
                $film->$propriete=null;
            } else {
            $film->$propriete='propriete film';
            }
        }
        $film->save();

        // récupération du film
        $film=Films::where('id','=',$film->id)->first();
        echo $film->titre;
        $this->assertRegExp('/FILM/',$film->titre,'Erreur titre non trouvé');
       // $this->assertTrue(true);
    }
}
