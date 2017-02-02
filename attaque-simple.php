<?php 

$reussite = mt_rand(0, 100);
if ($reussite <= $this -> getPrecision())
	{
		$degats = $this -> getPuissance();
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
			echo '- '.$degats.' PV -> '.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV <br><br>';
		}
	}
else 
	{
		echo '<em>L\'attaque de '.$attaquant -> getNom().' échoue !</em> <br>'.$ennemi -> getNom().' : '.$ennemi -> getPV().' PV<br><br>';
	}


 ?>