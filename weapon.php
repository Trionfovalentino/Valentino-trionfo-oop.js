<?php

abstract class Weapon {
    abstract public function attack();
}

class RepulsorRay extends Weapon {
    public function attack() {
        return "Raggi Repulsori (Pew Pew!)";
    }
}

class Unibeam extends Weapon {
    public function attack() {
        return "Unibeam dal petto (BOOM!)";
    }
}

class MicroMissiles extends Weapon {
    public function attack() {
        return "Micro-missili dalle spalle (Fisss!)";
    }
}