<?php
$file = fopen("test.txt","r");
$content = fread($file,filesize("test.txt"));
fclose($file);
echo $content;
$file = fopen("data.txt","w");
fwrite($file, "faylga ma'lumot yozish");
fclose($file);
$file = fopen("data.txt","a");
fwrite($file, "\nYangi ma'lumot qo'shish");
fclose($file);
echo "Yangi ma'lumot qo'shish";
if (file_exists('data.txt')) {
    echo "fayl mavjud";
    unlink("data.txt");
    echo "fayl o'chirildi<br>!";
} else{
    echo "Fayl mavjud emas!";
}
?>