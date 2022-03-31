<?php
    $partite = [
        [
            'casa' => 'Cremona',
            'ospite' => 'Universo Treviso',
            'punti_casa' => 74,
            'punti_ospite' => 67,
        ],
        [
            'casa' => 'Trento',
            'ospite' => 'Trieste',
            'punti_casa' => 75,
            'punti_ospite' => 70,
        ],
        [
            'casa' => 'Brescia',
            'ospite' => 'VL Pesaro',
            'punti_casa' => 80,
            'punti_ospite' => 76,
        ],
        [
            'casa' => 'Brindisi',
            'ospite' => 'Reggiana',
            'punti_casa' => 89,
            'punti_ospite' => 75,
        ],
        [
            'casa' => 'Olimpia Milano',
            'ospite' => 'Derthona',
            'punti_casa' => 79,
            'punti_ospite' => 77,
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

<h1>Giornata 1 di 30</h1>

    <ul>
        <?php
        for($i = 0; $i < count($partite); $i++){

            $partita = $partite[$i];
            $casa = $partita['casa'];
            $ospite = $partita['ospite'];
            $pt_casa = $partita['punti_casa'];
            $pt_ospite = $partita['punti_ospite'];
        ?>

        <li>
            <?php  echo "$casa - $ospite | $pt_casa - $pt_ospite"; ?>
        </li>
            
        <?php
        }
        ?>
    </ul>
    
</body>
</html>