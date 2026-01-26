<?php
class Car {
    private $model;
    protected $yili;
    public function __construct($model,$yili) {
        $this->model = $model;
        $this->yili = $yili;
    }
    public function __destruct(){
        echo "Bu destructor funksiyasi!";
    }
    public function getModel() {
        return $this->model;
    }
    public function info()  {
        return "Bu benzinda yuradigan avtomobil!<br>";
    }
}
$onix = new Car("onix",2024);
echo $onix->getModel()."<br>";
class Ecar extends Car {
    public $color;
    public function info() {
        return "Bu Ecar classi!<br>";
    }
    public function getYili() {
        return $this->yili;  
    }
}
$ecar = new Ecar("BYD",2025);
echo $ecar->getModel();
echo $ecar->info();
echo $ecar->getYili();
?> 