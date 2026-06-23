<?php


class Vertebrates {
    
    public function __construct() {
        // Chiama il proprio metodo protected per stampare la specializzazione iniziale
        $this->printVertebrate();
    }

    protected function printVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }
}

class WarmBlooded extends Vertebrates {
    
    public function __construct() {
        parent::__construct(); 
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded() {
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class ColdBlooded extends Vertebrates {
    
    public function __construct() {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}


class Mammals extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printMammal();
    }

    protected function printMammal() {
        echo "Roar! Sono un mammifero\n";
    }
}

class Birds extends WarmBlooded {
    public function __construct() {
        parent::__construct();
        $this->printBird() ;
    }

    protected function printBird() {
        echo "Cip cip!\n";
    }
}



class Fish extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish() {
        echo "Splash!\n";
    }
}

class Reptiles extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printReptile();
    }

    protected function printReptile() {
        echo "Sssss!\n";
    }
}

class Amphibians extends ColdBlooded {
    public function __construct() {
        parent::__construct();
        $this->printAmphibian();
    }

    protected function printAmphibian() {
        echo "Cra cra!\n";
    }
}




echo "--- ISTANZA MAGIKARP ---\n";
$magikarp = new Fish();

echo "\n--- ISTANZA LEONE (Extra) ---\n";
$lion = new Mammals();

?>