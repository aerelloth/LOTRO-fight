<?php 

class Menestrel extends Combattant
{
	protected $classe = 'ménestrel';
	protected $nom = "Hattie";

	public function __construct()
	{
		$this -> arme = new Instrument();
	}

	public function getArme()
	{
		return $this -> arme;
	}

	public function soin($attaquant)
	{
		echo $attaquant -> getNom().' régénère ses points de vie !<br>';
		$soin = mt_rand(50, 100);
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