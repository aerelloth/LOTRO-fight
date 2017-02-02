<?php 

class Epee extends Arme
{
	protected $nomArme = 'épée';

	public function __construct()
	{
		$this -> setPrecision(100);
		$this -> setPuissance(mt_rand(20, 40));
	}
}

 ?>