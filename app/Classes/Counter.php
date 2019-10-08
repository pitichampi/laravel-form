<?php

namespace App\Classes;
use Illuminate\Http\Request;

class Counter
{
	private $request;
  public function __construct()
  {

  	echo "ici declaration de la classe"; 

  }
    public function getCounter(Request $request)
    {
    	$this->request=$request;
    	 // compteur de page
        if ($this->request->session()->has('count')) {

            $count = $this->request->session()->get('count');

        } else {

            $count = 0;
        }

        $count++;

        $this->request->session()->put('count', $count);

        return $count; 

    }
}
