<?php 

class MDS extends Combattant
{
	protected $classe = 'maître du savoir';
	protected $nom = "Aerelloth";

	public function __construct()
	{
		$this -> arme = new Lynx();
		$this -> getArme() -> setLynxPV(mt_rand(20, 80));
	}

	public function getArme()
	{
		return $this -> arme;
	}

	public function attaquer($attaquant, $ennemi)
	{
		echo $attaquant -> getNom().' lance une incantation !<br>';
		$precision = mt_rand(40, 60);
		$reussite = mt_rand(0, 100);
		if ($reussite <= $precision)
			{
				$degats = mt_rand(5, 10);
				$PVennemi = $ennemi -> getPV();
				$PVrestants = $PVennemi - $degats;
				if ($PVrestants <= 0)
				{
					$ennemi -> setPV(0);
					echo '- '.$degats.' PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br><strong>'.$attaquant -> getNom().' a vaincu '.$ennemi -> getNom().' !</strong><br><br>';
				}
				else
				{
					$ennemi -> setPV($PVrestants); 
					echo '- '.$degats.' PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br>';
				}
			}
		else 
			{
				echo '<em>L\'attaque de '.$attaquant -> getNom().' échoue !</em> <br>'.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br>';
			}
	}

}

 ?>