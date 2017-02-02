<?php 

class Gardien extends Combattant
{
	protected $classe = 'gardien';
	protected $nom = "Bloma";

	public function __construct()
	{
		$this -> arme = new Hache();
	}

	public function getArme()
	{
		return $this -> arme;
	}

	protected $bouclier = true;

}

 ?>