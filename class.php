<?php


abstract class Category {
    abstract public function getMyCategory();
}


class Attualita extends Category {
    // Implementazione obbligatoria del metodo astratto
    public function getMyCategory() {
        echo "Questa è la categoria: Attualità\n";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        echo "Questa è la categoria: Sport\n";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        echo "Questa è la categoria: Gossip\n";
    }
}

class Storia extends Category {
    public function getMyCategory() {
        echo "Questa è la categoria: Storia\n";
    }
}


$news = new Attualita();
$news->getMyCategory();

$football = new Sport();
$football->getMyCategory();

$magazine = new Gossip();
$magazine->getMyCategory();

$books = new Storia();
$books->books = new Storia();
$books->getMyCategory();

?>