<?php

$partita1Tappa1 = [
    [
        'squadraOspite' => 'Squadra1',
        'squadraCasa' => 'Squadra2',
        'puntiSquadraOspite' => 57,
        'puntiSquadraCasa' => 80
    ]
    ];
$partita2Tappa1 = [
    [
        'squadraOspite' => 'Squadra3',
        'squadraCasa' => 'Squadra4',
        'puntiSquadraOspite' => 77,
        'puntiSquadraCasa' => 40
    ]
    ];

var_dump($partita1Tappa1);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneo Basket</title>
</head>
<body>
    <main>
    
    <h1>Risultati:</h1>
    <p><?php echo $partita1Tappa1[0]['squadraOspite'] ?> - <?php echo $partita1Tappa1[0]['squadraCasa'] ?> | <?php echo $partita1Tappa1[0]['puntiSquadraOspite'] ?>-<?php echo $partita1Tappa1[0]['puntiSquadraCasa'] ?></p>
    <p><?php echo $partita2Tappa1[0]['squadraOspite'] ?> - <?php echo $partita2Tappa1[0]['squadraCasa'] ?> | <?php echo $partita2Tappa1[0]['puntiSquadraOspite'] ?>-<?php echo $partita2Tappa1[0]['puntiSquadraCasa'] ?></p>

    
    </main>
</body>
</html>