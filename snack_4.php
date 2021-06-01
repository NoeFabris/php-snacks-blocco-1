<?php

$maxNumber = 15;
$numberList = [];

for ($i=1; $i < $maxNumber; $i++) { 
    $randomNumber = rand(0 , 15);

    if (!in_array($randomNumber, $numberList)) {
        $numberList[] = $randomNumber;
    } else {
        $i--;
    }
};

var_dump($numberList);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <main>
    <h1>Numeri:</h1>
    <p>
    <?php
    echo  implode('<br>', $numberList)
    ?>
    
    </p>
    
    </main>
</body>
</html>