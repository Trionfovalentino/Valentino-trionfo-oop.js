<?php

// Classe base/astratta per le categorie
abstract class Category {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function getMyCategory();
}

// Subclassi specifiche
class Sport extends Category {
    public function __construct() {
        parent::__construct("Sport");
    }

    public function getMyCategory() {
        echo "CATEGORIA: " . $this->name . "\n";
    }
}

class Gossip extends Category {
    public function __construct() {
        parent::__construct("Gossip");
    }

    public function getMyCategory() {
        echo "CATEGORIA: " . $this->name . "\n";
    }
}

class Attualita extends Category {
    public function __construct() {
        parent::__construct("Attualità");
    }

    public function getMyCategory() {
        echo "CATEGORIA: " . $this->name . "\n";
    }
}

// Classe Post
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
