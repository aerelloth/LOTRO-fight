<?php 

class Baton extends Arme
{
	protected $nomArme = 'bâton';

	public function __construct()
	{
		$this -> setPrecision(100);
		$this -> setPuissance(mt_rand(20, 40));
	}
}

 ?>