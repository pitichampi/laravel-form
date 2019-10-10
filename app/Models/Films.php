<?php

namespace App\Models;

use App\Scopes\FilmsScope;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    //
    protected $table="films";   // Facultatif. Si on ne précise pas cette info, il prend le nom du modèle en minuscules. Si le nom du modèle n'a pas de 's' (singulier) il matche avec la table au pluriel.
    protected $fillable=['titre','auteur','genre','img','annee','synopsys', 'duree','user_id'];

    protected static function boot()
    {
        parent::boot();
      //  static::addGlobalScope(new FilmsScope());
    }

    //Scope local
    public static function scopeFilms($query){
     //   return $query->where('annee','<','2001');
    }

    //Accesseur (getter)
    public function getTitreAttribute($value)
    {
        return strtoupper($value);
    }

    //mutateur
    public function setTitreAttribute($value){
        $this->attributes['titre']=strtolower($value);
    }


    public function Immatriculations(){
        return $this->hasOne('App\Models\Immatriculations');
    }

}
