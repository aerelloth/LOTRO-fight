<?php 

class Arc extends Arme
{
	protected $nomArme = 'arc';

	public function __construct()
	{
		$this -> setPrecision(mt_rand(40, 80));
		$this -> setPuissance(mt_rand(40, 80));
	}
}

 ?>