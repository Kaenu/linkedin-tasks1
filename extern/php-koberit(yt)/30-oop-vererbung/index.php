<?php
class Pkw {
    public $ps;
    public $raeder;

    public function __construct($ps) {
        $this->ps = $ps;
    }
    public function printInfo() {
        echo "\n" . " PS= " . $this->ps . " Räder= " . $this->raeder;
    }
}

class Auto extends Pkw {
    public $raeder = 4;
    public function printInfo() {
        echo "\n" . " Auto= " . $this->ps . " Räder= " . $this->raeder;
    }       
}

class Motorrad extends Pkw {
    public $raeder = 10;
    public function printInfo() {
        echo "\n" . " Motorrad= " . $this->ps . " Räder= " . $this->raeder;
    }      
}

$auto = new Auto(110);
$auto ->printInfo();

$auto2 = new Motorrad(110);
$auto2 ->printInfo();
?>