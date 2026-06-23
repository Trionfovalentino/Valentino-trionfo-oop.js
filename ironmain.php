<?php

require_once 'Weapon.php';
require_once 'Thruster.php';

class IronMan {
    public $modelName;
    public $weapon;   
    public $thruster; 

    public static $ironManCount = 0;

    public function __construct($modelName, Weapon $weapon, Thruster $thruster) {
        $this->modelName = $modelName;
        $this->weapon = $weapon;
        $this->thruster = $thruster;
        
        self::$ironManCount++;
    }

    public function showStatus() {
        echo "==================================================\n";
        echo "SISTEMA OPERATIVO JARVIS: Armatura [ {$this->modelName} ] Inizializzata!\n";
        echo "-> Sistema di Volo: " . $this->thruster->fly() . "\n";
        echo "-> Sistema d'Armamento: " . $this->weapon->attack() . "\n";
        echo "==================================================\n\n";
    }
}