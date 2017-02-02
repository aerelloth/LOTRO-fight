<?php 

class Mage extends Combattant
{
	protected $classe = 'mage';
	protected $nom = "Mallaur";

	public function __construct()
	{
		$this -> arme = new Baton();
	}

	public function getArme()
	{
		return $this -> arme;
	}

	public function bouleDeFeu($attaquant, $ennemi)
	{
		echo $attaquant -> getNom().' envoie une boule de feu sur '.$ennemi -> getNom().' !<br>';
		$reussite = mt_rand(0, 100);
		if ($reussite <= 50)
			{
				$degats = mt_rand(100, 200);
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
				echo '<em>L\'attaque de '.$attaquant -> getNom().' échoue !</em> <br>PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br>';
			}
	}

	public function soin($attaquant)
	{
		echo $attaquant -> getNom().' régénère ses points de vie !<br>';
		$soin = mt_rand(20, 80);
		$PV = $attaquant -> getPV();
		if ($PV+$soin <=180)
		{
			$attaquant -> setPV($PV + $soin); 
		}
		else
		{
			$attaquant -> setPV(180); 
		}
		echo '+ '.$soin.' PV -> PV : '.$attaquant -> getPV().'<br><br>';
	}
}


 ?>