<?php 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    
    $keys = array_keys($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>

    <style>
        h3{
            text-align: center;
            color: red;
        }
        .container{
            border: 1px solid black;
            margin-bottom: 20px;
            max-width: 300px;
            font-weight: bold;
        }
        .teachers{
            background-color: #ccc;
        }
        .pm{
            background-color: #88cc88;
        }
    </style>
</head>
<body>

    <?php
    for($i = 0; $i < count($keys); $i++){
        $genre = $keys[$i];
        $people = $db[$genre];
    ?>

    <div class="container <?php echo $genre; ?>">

        <h3><?php echo ucfirst($genre); ?></h3>

        <ul>

            <?php
             for($j = 0; $j < count($people); $j++){
                $person = $people[$j];
            ?>

            <li>
                <?php
                echo "{$person['name']} {$person['lastname']}";
                ?>
            </li>

            <?php
            }
            ?>
        </ul>
    </div>

    <?php
    }
    ?>    
    
</body>
</html>