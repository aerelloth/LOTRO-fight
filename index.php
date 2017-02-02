<?php 

header('content-type: text/html; charset=utf-8');


spl_autoload_register(function($className)
	{
		include $className.'.php';
	});

function createGuerrier() {
	$guerrier = new Guerrier();
	$guerrier -> setPV(mt_rand(150, 250));
	$guerrier -> setForce(mt_rand(5, 10));
	return $guerrier;
};

function createMage() {
	$mage = new Mage();
	$mage -> setPV(mt_rand(80, 180));
	$mage -> setForce(mt_rand(2, 6));
	return $mage;
};

function createArcher() {
	$archer = new Archer();
	$archer -> setPV(mt_rand(100, 200));
	$archer -> setForce(mt_rand(5, 10));
	return $archer;
};

function createMDS() {
	$archer = new MDS();
	$archer -> setPV(mt_rand(80, 180));
	$archer -> setForce(mt_rand(2, 6));
	return $archer;
};

function createMenestrel() {
	$archer = new Menestrel();
	$archer -> setPV(mt_rand(80, 180));
	$archer -> setForce(mt_rand(2, 5));
	return $archer;
};

function createCambrioleur() {
	$archer = new Cambrioleur();
	$archer -> setPV(mt_rand(60, 150));
	$archer -> setForce(mt_rand(4, 8));
	return $archer;
};

function createGardien() {
	$archer = new Gardien();
	$archer -> setPV(mt_rand(200, 400));
	$archer -> setForce(mt_rand(5, 10));
	return $archer;
};

$combattants = [];
$nomsCombattants = [];

function createAleatoire() {
	$alea = mt_rand(0, 7);
	if ($alea == 0)
	{
		$combattant = createGuerrier();
	}
	elseif ($alea == 1)
	{
		$combattant = createMage();
	}
	elseif ($alea == 2)
	{
		$combattant = createArcher();
	}
	elseif ($alea == 3)
	{
		$combattant = createMDS();
	}
	elseif ($alea == 4)
	{
		$combattant = createMenestrel();
	}
	elseif ($alea == 5)
	{
		$combattant = createCambrioleur();
	}
	elseif ($alea == 6)
	{
		$combattant = createGardien();
	}
	elseif ($alea == 7)
	{
		$combattant = createGuerrier();
	}
	return $combattant;
}

for ($i=1;$i<=mt_rand(2,5); $i++)
{
	$combattant = createAleatoire();
	while (in_array($combattant -> getNom(), $nomsCombattants))
	{
		$combattant = createAleatoire();
	}

	$combattants[$i] = $combattant;
	$nomsCombattants[$i] = $combattant -> getNom();
}
$nbreCombattants = count($combattants);

include 'index.phtml';

 ?>