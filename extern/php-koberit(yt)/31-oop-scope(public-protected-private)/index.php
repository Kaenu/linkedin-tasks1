<?php
class Pkw {
    public $ps = 100;
    protected $raeder = 0;
    private $id = 13;

    public function printInfo() {
        echo "PS= " . $this->ps . " Räder= " . $this->raeder . " und ID: " . $this->printID();
    }
    private function printID() {
        return $this->id;
    }    
}

class Auto {
    public $ps = 200;
    protected $raeder = 4;
    private $id = 123343423;

    public function printInfo() {
        echo "PS= " . $this->ps . " Räder= " . $this->raeder . " und ID: " . $this->id;
    }
}

$pkw = new Pkw();
$auto = new Auto();
$auto->printInfo();
    // echo $pkw->ps . ;
    // echo $pkw->raeder . ;
    // echo $pkw->id . ;
    // $pkw->printInfo();
?>