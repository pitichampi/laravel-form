<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FilmsForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->add('titre','text',['label'=>'titre du film']);
        $this->add('auteur','text',['label'=>'auteur du film']);
        $this->add('annee','text',['label'=>'année du film']);
        $this->add('genre','text',['label'=>'genre du film']);
        $this->add('duree','text',['label'=>'durée du film']);
        $this->add('img','file',['label'=>'affiche du film']);
        $this->add('synopsys','textarea',['label'=>'synopsys du film']);
    }
}

