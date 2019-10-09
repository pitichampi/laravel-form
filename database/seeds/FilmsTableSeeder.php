<?php

use Illuminate\Database\Seeder;
use App\Repositories\FilmsRepository;
use App\Models\Films;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $listefilms=FilmsRepository::$liste;
        foreach ($listefilms as $film){
            unset($film['id']);

            //insérer un tableau associatif de propriétés (type json ou table) directement dans la base
            Films::create($film);

        }

    }
}
