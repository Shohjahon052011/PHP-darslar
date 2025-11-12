<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $ism = $_POST['ism'];
    $familya = $_POST['familya'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $ism ?></li>
        <li><?= $familya?></li>
    </ul>
</body>
</html>