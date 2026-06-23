<?php

// 1. Definizione del Trait Calculator
trait Calculator {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a) {
        return sqrt($a); // Corretto da $numero a $a
    }
}

// 2. Definizione della Classe Rettangolo che usa il Trait
class Rettangolo {
    
    use Calculator;

    public $b; // Base
    public $h; // Altezza

    public function __construct($base, $altezza) {
        $this->b = $base;
        $this->h = $altezza;
    }

    public function calcolaArea() {
        return $this->mul($this->b, $this->h);
    }

    // Calcolo del Perimetro: (2 * b) + (2 * h)
    public function calcolaPerimetro() {
        $doppiaBase = $this->mul(2, $this->b);
        $doppiaAltezza = $this->mul(2, $this->h);
        return $this->sum($doppiaBase, $doppiaAltezza);
    }

    public function calcolaDiagonale() {
        $baseAlQuadrato = $this->mul($this->b, $this->b);
        $altezzaAlQuadrato = $this->mul($this->h, $this->h);
        $sommaQuadrati = $this->sum($baseAlQuadrato, $altezzaAlQuadrato);
        
        return $this->sqr($sommaQuadrati);
    }
}


$rettangolo = new Rettangolo(4, 3);

echo "--- DATI DEL RETTANGOLO (Base: 4, Altezza: 3) ---\n";
echo "Area: " . $rettangolo->calcolaArea() . "\n";           
echo "Perimetro: " . $rettangolo->calcolaPerimetro() . "\n";   
echo "Diagonale: " . $rettangolo->calcolaDiagonale() . "\n";   
echo "==================================================\n";

?>