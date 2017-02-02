<?php 

class Cambrioleur extends Combattant
{
	protected $classe = 'cambrioleur';
	protected $nom = "Anah";

	public function __construct()
	{
		$this -> arme = new Dague();
	}

	public function getArme()
	{
		return $this -> arme;
	}

	public function attaquer($attaquant, $ennemi)
	{
		echo $attaquant -> getNom().' vole des PV à '.$ennemi -> getNom().' !<br>';
		$degats = mt_rand(20, 60);
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
			echo '- '.$degats.' PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br>';
		}
		
		$PV = $attaquant -> getPV();
		if ($PV+$degats <=150)
		{
			$attaquant -> setPV($PV + $degats); 
		}
		else
		{
			$attaquant -> setPV(150); 
		}
		echo '+ '.$degats.' PV -> PV : '.$attaquant -> getPV().'<br><br>';

	}

}


 ?>