<?php
$sonlar = array(5,12,35,65,42,1,"test");
$sonlar1 = [8,45,46,8,65,62,5,6,8,2,"test"];
$cars = array("Volov","BMW","Toyota");
print_r($cars);
print_r($sonlar);
echo $sonlar[2];
echo"\n";
echo $sonlar[4];
$sonlar[4] = 45;
echo "\n";
echo $sonlar[4];
echo "\n";
foreach($sonlar as $item) {
    echo $item." ";
}
$cars = array("Volov","BMW","Toyota");
array_push($cars,"Chevrollet");
echo "\n";
print_r($cars);
$cars[] = "BYD";
print_r($cars);
echo "\n";
$user = ["ism" => "Shohjahon", "familya" => "Ro'zmamatov", "t_yili" => 2011];
echo $user['ism']
?>