<?php
class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($name) {
        $this->name = $name . "<br>";
    }

    public function get_legs() {
        return $this->legs . "<br>";
    }

    public function get_cold_blooded() {
        return $this->cold_blooded . "<br>";
    }
}
?>