<?php

$partiteTappa1 = [
    [
        'squadraOspite' => 'Squadra1',
        'squadraCasa' => 'Squadra2',
        'puntiSquadraOspite' => 57,
        'puntiSquadraCasa' => 80
    ],
    [
        'squadraOspite' => 'Squadra3',
        'squadraCasa' => 'Squadra4',
        'puntiSquadraOspite' => 77,
        'puntiSquadraCasa' => 40
    ]
    ];

var_dump($partiteTappa1);

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
    <ul>
    
    <?php 
    for ($i=0; $i < count($partiteTappa1); $i++) { 
        $partitaCorrennte = $partiteTappa1[$i];

        $nomiSquadre = $partitaCorrennte['squadraOspite']. ' - ' . $partitaCorrennte['squadraCasa'];
        $puntiSquadre = $partitaCorrennte['puntiSquadraOspite']. ' - ' . $partitaCorrennte['puntiSquadraCasa'];
        $testoFinale = $nomiSquadre . ' | ' . $puntiSquadre;
        
        ?>
    
    <li><?php echo $testoFinale ?></li>

    <?php
    }
    ?>
    </ul>


    
    </main>
</body>
</html>