<?php 

abstract class Arme
{
	protected $precision, $puissance, $nomArme;
	public function setNomArme($nomArme)
		{
			$nomsArmesPossibles = ['lance', 'épée', 'arc', 'dague', 'hache', 'lynx', 'instrument', null];
			if (in_array($nomArme, $nomsArmesPossibles))
			{
				$this -> nomArme = $nomArme;
			}
		}
	public function getNomArme()
		{
			return $this -> nomArme;
		}

	// précision
	public function setPrecision($precision)
		{
			if (is_int($precision) && $precision >=0 && $precision <=100)
			{
				$this -> precision = $precision;
			}		
		}
	public function getPrecision()
		{
			return $this -> precision;
		}

	// puissance
	public function setPuissance($puissance)
		{
			if (is_int($puissance) && $puissance >=0)
			{
				$this -> puissance = $puissance;
			}
		}
	public function getPuissance()
		{
			return $this -> puissance;
		}

	// attaque
		public function attaqueArme($attaquant, $ennemi)
		{
			// affichage 
			$armesFeminin = ['dague', 'hache', 'lance'];
			$armesMasculinVoyelle = ['arc', 'épée'];

			if (in_array($this -> getNomArme(), $armesFeminin))
			{
				echo $attaquant -> getNom().' attaque '.$ennemi -> getNom().' avec sa '.$this -> getNomArme().' !<br>';
			}

			elseif (in_array($this -> getNomArme(), $armesMasculinVoyelle))
			{
				echo $attaquant -> getNom().' attaque '.$ennemi -> getNom().' avec son '.$this -> getNomArme().' !<br>';
			}

			// dégâts
			if ($this -> getNomArme() == 'lance' OR $this -> getNomArme() == 'épée' OR $this -> getNomArme() == 'arc' OR $this -> getNomArme() == 'hache')
			{
				include ('attaque-simple.php');

				if ($this -> getNomArme() == 'lance')
					{
						$this -> setNomArme(null);
						echo '<em>'.$attaquant -> getNom().' a perdu sa lance !</em><br><br>';
					}
			}

			elseif ($this -> getNomArme() == null)
			{
				$attaquant -> attaquer($attaquant, $ennemi);
			}

			elseif ($this -> getNomArme() == 'bâton')
			{
				$alea = mt_rand(0,2);
				if ($alea == 0)
				{
					$attaquant -> bouleDeFeu($attaquant, $ennemi);
				}
				else if ($alea == 1)
				{
					$attaquant -> soin($attaquant);
				}
				else if ($alea == 2)
				{
					echo $attaquant -> getNom().' donne un coup de bâton à '.$ennemi -> getNom().' !<br>';
					include ('attaque-simple.php');
				}
			}

			elseif ($this -> getNomArme() == 'lynx')
			{
				$alea = mt_rand(0,1);
				if ($alea == 0)
				{
					$attaquant -> attaquer($attaquant, $ennemi);
				}
				else if ($alea == 1)
				{
					echo $attaquant -> getNom().' attaque '.$ennemi -> getNom().' avec son lynx !<br>';
					include ('attaque-simple.php');
				}
			}

			elseif ($this -> getNomArme() == 'instrument')
			{
				$alea = mt_rand(0,1);
				if ($alea == 0)
				{
					$attaquant -> soin($attaquant);
				}
				else if ($alea == 1)
				{
					$instrumentsFeminin = ['cornemuse', 'flûte'];
					$instrumentsMasculinVoyelle = ['tambour'];

					if (in_array($this -> getInstrument(), $instrumentsFeminin))
					{
						echo $attaquant -> getNom().' casse les oreilles de '.$ennemi -> getNom().' avec sa '.$this -> getInstrument().' !<br>';
					}

					elseif (in_array($this -> getInstrument(), $instrumentsMasculinVoyelle))
					{
						echo $attaquant -> getNom().' casse les oreilles de '.$ennemi -> getNom().' avec son '.$this -> getInstrument().' !<br>';
					}

					include ('attaque-simple.php');
				}
			}

			elseif ($this -> getNomArme() == 'dague')
			{
				$alea = mt_rand(0,1);
				if ($alea == 0)
				{
					$attaquant -> attaquer($attaquant, $ennemi);
				}
				else if ($alea == 1)
				{
					include ('attaque-simple.php');
				}
			}

		}
}

 ?>