<?php 

class Instrument extends Arme
{
	protected $nomArme = 'instrument';
	protected $instrument;
	public function setInstrument($instrument)
	{
		$instrumentsPossibles = ['cornemuse', 'flûte', 'tambour'];
		if (in_array($instrument, $instrumentsPossibles))
		{
			$this -> instrument = $instrument;
		}
	}
		
	public function getInstrument()
		{
			return $this -> instrument;
		}

	public function __construct()
	{
		$this -> setPrecision(100);
		$this -> setPuissance(mt_rand(10, 50));
		$instrumentsPossibles = ['cornemuse', 'flûte', 'tambour'];
		$nbreInstruments = count($instrumentsPossibles);
		$instrument = $instrumentsPossibles[mt_rand(0, $nbreInstruments-1)];
		$this -> setInstrument($instrument);
	}
}

 ?>