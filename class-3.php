<?php
class kompyuter {
    public $nomi;
    public $rangi;
    public $claviyatura;
    public function __construct($nomi,$rangi,$claviyatura){
    $this->nomi = $nomi;
    $this->rangi = $rangi;
    $this->claviyatura = $claviyatura;
    }
}
$kompyuter = new kompyuter("lenovo","qora","claviyatura");
var_dump($kompyuter)
?>