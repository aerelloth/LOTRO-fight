<?php 

class Archer extends Combattant
{
	protected $classe = 'archer';
	protected $nom = "Sullaur";

	public function __construct()
	{
		$this -> arme = new Arc();
	}

	public function getArme()
	{
		return $this -> arme;
	}

}


 ?>