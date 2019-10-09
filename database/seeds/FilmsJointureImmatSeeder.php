<?php

use Illuminate\Database\Seeder;
use App\Models\Films;
use App\Models\Immatriculations;

class FilmsJointureImmatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $film=Films::where('id','=',1)->first();
        $immat=Immatriculations::where('id','=',1)->first();
        $film->Immatriculations()->save($immat);

    }
}
