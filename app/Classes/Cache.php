<?php

namespace App\Classes;

class Cache implements CacheInterface
{

	private $moncache; 
	public function get()
	{

		return $this->moncache;
	}
	public function set($cache)
	{

		$this->moncache=$cache;
	}
    
}
