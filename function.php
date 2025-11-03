<?php
function Hello() {
    echo "Hello world! \n";
}
Hello();
Hello();
Hello();
Hello();
echo "\n";
function yigindi() {
    $summa = 0;
    for($i = 1; $i <= 10; $i++){
        $summa += $i;
    }
    echo "Yig'indi: $summa \n";
}
yigindi();
echo "\n";
function ikkisonniqoshish($birinchi_son, $ikkinchi_son) {
    echo $birinchi_son + $ikkinchi_son;
}
ikkisonniqoshish(52,13);
echo "\n";
function yoshnianiqlash($b_year,$year = 2024) {
    echo "Siz ".$year - $b_year." yoshdasiz.";
}
yoshnianiqlash(2011);
yoshnianiqlash(2011,2025);
echo "\n";
function yoshnianiqlash1($b_year,$year = 2024) {
    return "Siz ".$year - $b_year." yoshdasiz.";
}
 $yosh = yoshnianiqlash1(2010,2025);
 echo "$yosh";
 echo "\n";
 if ($yosh < 18) {
    echo "Siz voyaga yetmagansiz!";
 } else {
    echo "Siz voyaga yetgansiz!";
 }
 echo "\n";
 function summa($n) {
    $summa = 0;
    for($i = 1; $i <=$n; $i++){ 
        $summa = 0;
    }
 }
?>