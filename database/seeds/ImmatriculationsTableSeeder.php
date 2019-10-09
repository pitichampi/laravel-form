<?php

use Illuminate\Database\Seeder;

class ImmatriculationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $immat=[['numero'=>'1111'],['numero'=>'2222'],['numero'=>'3333']];
        foreach ($immat as $imm){
            Immatriculations::create($imm);
        }
    }
}

