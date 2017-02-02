<?php 

class Dague extends Arme
{
	protected $nomArme = 'dague';

	public function __construct()
	{
		$this -> setPrecision(100);
		$this -> setPuissance(mt_rand(10, 20));
	}
}

 ?>