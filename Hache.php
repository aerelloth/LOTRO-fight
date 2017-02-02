<?php 

class Hache extends Arme
{
	protected $nomArme = 'hache';

	public function __construct()
	{
		$this -> setPrecision(mt_rand(40, 60));
		$this -> setPuissance(mt_rand(20, 40));
	}
}

 ?>