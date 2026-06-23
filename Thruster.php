<?php

abstract class Thruster {
    abstract public function fly();
}

class StandardThruster extends Thruster {
    public function fly() {
        return "Volo standard a Mach 2";
    }
}

class SupersonicThruster extends Thruster {
    public function fly() {
        return "Volo supersonico a Mach 5 con fiammate azzurre";
    }
}