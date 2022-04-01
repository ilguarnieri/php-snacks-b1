<?php
    $classe =[
        [
            'name' => 'Federico',
            'lastname' => 'Potenza',
            'voti' => [8, 8.5, 7, 10, 9]
        ],
        [
            'name' => 'Massimo',
            'lastname' => 'Rossi',
            'voti' => [6, 6.5, 8, 7, 7.5]
        ],
        [
            'name' => 'Valeria',
            'lastname' => 'Millarte',
            'voti' => [8, 9, 9.5, 7, 8.5]
        ],
        [
            'name' => 'Simona',
            'lastname' => 'Veneziani',
            'voti' => [7, 7.5, 6, 6.5, 7]
        ],
        [
            'name' => 'Giacomo',
            'lastname' => 'Marino',
            'voti' => [7, 7, 8, 8.5, 6.5]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>

    <ul>
        <?php
        for($i = 0; $i < count($classe); $i++){

            $alunno = $classe[$i];
            $media = array_sum($alunno['voti'])/count($alunno['voti']);
        ?>

        <li>
            <?php
            echo "{$alunno['name']} {$alunno['lastname']} - media: $media";
            ?>
        </li>

        <?php
        }
        ?>
    </ul>
    
</body>
</html>