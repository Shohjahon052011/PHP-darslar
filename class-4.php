<?php
class Car{
    private $model;
    public $color;
    public $probeg;
    public function __construct($color,$probeg) {
        $this->color = $color;
        $this->probeg = $probeg;
    }
    public function __destruct(){
        echo"Obyekt yo'q qilindi <br>";
    }
    public function setModel($model){
    $this->model = $model;
    }
    public function getModel(){
        return $this->model;
    }
    public function drive(){
        echo "Mashina yurmoqda...<br>";
    }
}
$bmw = new Car("Black",0);
$bmw->setModel("BMW");
$bmw->color = "Black";
echo $bmw->getModel()."<br>";
echo "Rangi: ".$bmw->color."<br>";
$bmw->drive();
echo "<br>";
?>