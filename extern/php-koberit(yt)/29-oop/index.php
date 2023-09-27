<?php
class pkw {
    public $ps;
    public $raeder;

    public function __construct($ps, $raeder) {
        $this->ps = $ps;
        $this->raeder = $raeder;
    }
    public function printInfo() {
        echo "\n" . " PS= " . $this->ps . " Räder= " . $this->raeder;
    }
}
    $auto = new pkw(4, 1);
    $auto->printInfo();

    $auto2 = new pkw(1, 67);
    $auto2->printInfo();
?>