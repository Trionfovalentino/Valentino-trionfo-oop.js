<?php

require_once 'class.php';

class Post {

    public $title;
    public $category; 
    public $tag;

  public function __construct($title, Category $category, $tag) {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }


    public function displayPost() {
        echo "==================================================\n";
        echo "TITOLO: " . $this->title . "\n";
        echo "TAG: " . $this->tag . "\n";
        
      $this->category->getMyCategory(); 
        echo "==================================================\n\n";
    }
}


$catSport = new Sport();
$catGossip = new Gossip();
$catAttualita = new Attualita();

$post1 = new Post(
    "Il Milan vince il derby all'ultimo minuto!", 
    $catSport, 
    "#calcio #sport #milan"
);

$post2 = new Post(
    "Nuovo scoop estivo: beccata la famosa coppia a Capri", 
    $catGossip, 
    "#gossip #estate #paparazzi"
);

$post3 = new Post(
    "Nuove riforme economiche approvate in parlamento", 
    $catAttualita, 
    "#politica #attualita #news"
);


echo "--- ELENCO ARTICOLI PUBBLICATI ---\n\n";
$post1->displayPost();
$post2->displayPost();
$post3->displayPost();

?>