<?php
namespace App\Classes;

interface CacheInterface
{

	public function get();
	
	public function set($cache);

    
}
