<?php
// PHP -> JSON
$data = [
    'ism' => "Shohjahon",
    'yosh' => 14,
    'shahar' => 'Xonqa'
];
print_r($data);
echo "<br>";
$json = json_encode($data);
echo $json;
echo "<br>";
// JSON -> PHP
$json = '{"ism":"Akmal","yoshi":"21","shahar":"Urganch"}';
$data_object = json_decode($json);
$data_array = json_decode($json,true);
print_r($data_object);
echo "<br>";
print_r($data_array);
?>