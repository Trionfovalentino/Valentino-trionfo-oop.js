<?php

require_once 'Weapon.php';
require_once 'Thruster.php';
require_once 'IronMan.php';


$weaponsPool = [new RepulsorRay(), new Unibeam(), new MicroMissiles()];
$thrustersPool = [new StandardThruster(), new SupersonicThruster()];


$army = [];


$numberOfSoldiers = 5;

for ($i = 1; $i <= $numberOfSoldiers; $i++) {
    $randomWeapon = $weaponsPool[array_rand($weaponsPool)];
    $randomThruster = $thrustersPool[array_rand($thrustersPool)];
    
    $modelName = "Mark " . rand(10, 85);
    $army[] = new IronMan($modelName, $randomWeapon, $randomThruster);
}


echo "--- PROTOCOLLO FESTA IN CASA: AVVIO ESERCITO ---\n\n";
foreach ($army as $soldier) {
    $soldier->showStatus();
}


echo "TOTALE ASSOLUTO DI IRON MAN CREATI NELL'ESERCITO: " . IronMan::$ironManCount . "\n";