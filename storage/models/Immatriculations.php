<?php namespace App;

/**
 * Eloquent class to describe the immatriculations table
 *
 * automatically generated by ModelGenerator.php
 */
class Immatriculations extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'immatriculations';

    protected $fillable = ['numero'];

    public function films()
    {
        return $this->belongsTo('App\Films', 'films_id', 'id');
    }
}