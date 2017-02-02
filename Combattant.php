<?php 

abstract class Combattant
{
	protected $classe, $nom, $PV, $force, $arme;
	public function setNom($nom)
	{
		$nomsPossibles = ['Aerelloth', 'Hattie', 'Anah', 'Mallaur', 'Sullaur', 'Mellinda', 'Bloma', 'Piperine'];
		if (in_array($nom, $nomsPossibles))
		{
			$this -> nom = $nom;
		}
	
	}

	// public function setNom($nom)
	// {
	// 	$this -> nom = $nom;
	// }
	// public function __construct()
	// {
	// 	$nomsPossibles = ['Aerelloth', 'Hattie', 'Anah', 'Mallaur', 'Sullaur', 'Mellinda', 'Bloma', 'Piperine'];
	// 	$max = count($nomsPossibles);
	// 	$alea = mt_rand(0, $max-1);
	// 	$nom = $nomsPossibles[$alea];
	// 	$this -> setNom($nom);
	// }
	
	public function getNom()
	{
		return $this -> nom;
	}

	public function getClasse()
	{
		return $this -> classe;
	}

	public function setPV($PV)
	{
		if ($PV < 0)
		{
			$this -> PV =0;
		}
		else 
		{
			$this -> PV = $PV;
		}
		
	}
	public function getPV()
	{
		return $this -> PV;
	}
	public function setForce($force)
	{
		$this -> force = $force;
	}
	public function getForce()
	{
		return $this -> force;
	}
	abstract public function getArme();

}

 ?>