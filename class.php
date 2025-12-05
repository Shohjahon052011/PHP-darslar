<?php
class Car{
    public $model;
    public $color;
    public $probeg;
    public function drive() {
        echo "Mashina harakatlanyapti";
    }
}
$bmw = new Car();
$bmw->model = "BMW X5";
$bmw->color = "Black";
$bmw->probeg = "0";
print_r($bmw);
echo "<br>";
var_dump($bmw);
echo "<br>";
echo "Mashina modeli: ".$bmw->model."<br>";
echo "Mashina rangi: ".$bmw->color."<br>";

$spark = new Car();
$spark->model = "Spark";
$spark->color = "white";
$spark->probeg = 0;
print_r($spark);
echo "<br>";
var_dump($spark);
echo "<br>";
echo "Mashina modeli: ".$spark->model."<br>";
echo "Mashina rangi: ".$spark->color."<br>";

?>