<?php
$x = "Helo\nWorld!";
$x = trim($x);
$x = str_replace("\n", "<br>",$x);
echo $x;
echo "\n";
$ism = "SHohjahon";
$familya = "Ro'zmamatov";
echo $ism." ".$familya;
echo "\n";
$ism .= $familya;
echo $ism;
echo "\n";
echo $familya[0];
echo "\n";
echo substr($familya,2,3);
echo "\n";
echo substr($familya,2,);
echo "\n";
$dars = "dars: PHP asoslari";
echo substr($dars,6,3 );
?>