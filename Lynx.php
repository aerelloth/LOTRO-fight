<?php 

class Lynx extends Arme
{
	protected $nomArme = 'lynx';

	public function __construct()
	{
		$this -> setPrecision(mt_rand(40, 60));
		$this -> setPuissance(mt_rand(100, 200));
	}
	
	protected $lynxPV;

	public function setLynxPV($lynxPV)
		{
			if (is_int($lynxPV) && $lynxPV >=0)
			{
				$this -> lynxPV = $lynxPV;
			}
		}

	public function getLynxPV()
		{
			return $this -> lynxPV;
		}
}

 ?>