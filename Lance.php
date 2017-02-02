<?php 

class Lance extends Arme
{
	protected $nomArme = 'lance';

	public function __construct()
	{
		$this -> setPrecision(mt_rand(40, 60));
		$this -> setPuissance(mt_rand(100, 200));
	}
}

 ?>