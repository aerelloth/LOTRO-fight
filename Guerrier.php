<?php 

class Guerrier extends Combattant
{
	protected $classe = 'guerrier';
	protected $nom;

	public function __construct()
	{
		$alea = mt_rand(1, 2);
		if ($alea == 1)
		{
			$this -> arme = new Lance();
			$this -> nom = "Mellinda";
		}
		
		elseif ($alea == 2)
		{
			$this -> arme = new Epee();
			$this -> nom = "Piperine";
		}
	}

	public function getArme()
	{
		return $this -> arme;
	}

	public function attaquer($attaquant, $ennemi)
	{
		echo $attaquant -> getNom().' attaque '.$ennemi -> getNom().' à mains nues !<br>';
		$degats = $attaquant -> getForce();
		$PVennemi = $ennemi -> getPV();
		$PVrestants = $PVennemi - $degats;
		if ($PVrestants <= 0)
				{
					$ennemi -> setPV(0);
					echo '- '.$degats.'  PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br><strong>'.$attaquant -> getNom().' a vaincu '.$ennemi -> getNom().' !</strong><br><br>';
				}
				else
				{
					$ennemi -> setPV($PVrestants);
					echo '- '.$degats.'  PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br>';
				}
		}
}


 ?>