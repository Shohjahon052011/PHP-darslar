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
echo $user['ism'];
print_r($user);
$user['familya'] = "Komilov";
echo $user['familya'];
echo"\n";
foreach($user as $key => $item) {
    echo $key." ".$item.", ";
}
$sonlar = [];
$sonlar['ism1'] = "test1";
$sonlar[0] = 12;
$sonlar[1] = 19;
$sonlar['ism'] = "test";
print_r($sonlar);
echo"\n";
$sonlar1 = [8,45,46,8,65,62,5,6,8,2,"test"];
array_splice($sonlar1,2,4);
print_r($sonlar1);
echo"\n";
$users = [
    ["ism" => "Shohjahon", "familya" => "Ro'zmamatov", "t_yili" => 2011],
    ["ism" => "Murodbek", "familya" => "Jumanazaro'v", "t_yili" => 2012],
    ["ism" => "Bekzod", "familya" => "Masharipov", "t_yili" => 2013],
];
$son = [[3,6,5,[2,8,56]],7,6,4,];
print_r($users);
echo $users[1]['ism'];
echo "\n";
foreach ($users as $item){
    echo $item['ism'].", ";
}
?>