<?php
/*
  Created by Pierre Bernardeau.
  For Influa
  Date: 10/10/2019
  Time: 10:04

        _
    ,--'_`--.
  ,/( \   / )\.
 //  \ \_/ /  \\
|/___/     \___\|
((___       ___))    Join the Empire !!!  ﴾̵ ̵◎̵ ̵﴿
|\   \  _  /   /|
 \\  / / \ \  //
  `\(_/___\_)/'
    `--._.--'

 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FilmsScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('annee','>',2000);
    }
}
