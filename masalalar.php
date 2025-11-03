<?php
$i;
while($i <=20){
    echo $i. ",";
    $i++;
}
echo "\n";
echo "\n";
for($i = 1; $i <= 20; $i++) {
    if($i % 2 == 0) {
         echo $i.", ";
    }
}
echo "\n";
for($i = 20; $i >= 1; $i--) {
         echo $i.", ";
}
echo "\n";
echo "\n";
$i = 1;
$summa = 0;
while($i <=10){
    $summa +=$i;
    $i++;
}
echo "yig'indisi:$summa";
?>