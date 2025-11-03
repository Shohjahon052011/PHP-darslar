<?php
$int = 5;
$kasr = 16.5;
$string_number = "14";

//Integer
var_dump(is_int($int));
var_dump(is_int($kasr));
var_dump(is_int($string_number));
echo "\n";
// Float
var_dump(is_float($int));
var_dump(is_float($kasr));
var_dump(is_float($string_number));
echo "\n";
//Numbr
var_dump(is_numeric($int));
var_dump(is_numeric($kasr));
var_dump(is_numeric($string_number));
echo "\n";
//string
var_dump(is_string(34));
echo "\n";
$a = 5;
$b = 5.34;
$c = "hello";
$d = true;

var_dump($a);
var_dump($b);
var_dump($C);
var_dump($D);
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);


echo pi();
echo "\n";
echo min(5,46,2,8,45,-6,-45,12,0);
echo "\n";
echo max(5,46,2,8,45,-6,-45,12,0);
echo "\n";
echo abs(-6);
echo "\n";
echo sqrt(64);

echo "\n";
echo(round(0.60));
echo "\n";
echo(round(0.49));
echo "\n";
echo rand(1,200);
echo "\n";
?>