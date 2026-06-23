<?php

// 1. Classe Genitore Principale
class Continent {
    public $nameContinent;
    
    public function __construct($continent) {
        $this->nameContinent = $continent;
    }
}

// 2. Country eredita da Continent
class Country extends Continent {
    public $nameCountry;

    public function __construct($continent, $country) {
        parent::__construct($continent); // Passa il dato al costruttore del genitore
        $this->nameCountry = $country;
    }
}

// 3. Region eredita da Country
class Region extends Country {
    public $nameRegion;

    public function __construct($continent, $country, $region) {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

// 4. Province eredita da Region
class Province extends Region {
    public $nameProvince;

    public function __construct($continent, $country, $region, $province) {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

// 5. City eredita da Province
class City extends Province {
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city) {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

// 6. Classe Finale Street eredita da City
class Street extends City {
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street) {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

   
    public function getMyCurrentLocation() {
        echo "Mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet}\n";
    }
}



$myLocation = new Street(
    "Europa", 
    "Italia", 
    "Puglia", 
    "Ba", 
    "Bari", 
    "Strada San Giorgio Martire 2D"
);

$myLocation->getMyCurrentLocation();

?>