<?php

    $numbers = [];

    do{
        $num = rand(1, 100);

        if(!in_array($num, $numbers)){
            $numbers[] = $num;
        };

    }while(count($numbers) < 15);
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

    <ol>
        <?php
        for($i = 0; $i < count($numbers); $i++){
        ?>

        <li>
            <span style="font-weight: bold;">
                <?php
                echo $numbers[$i];
                ?>
            </span>
        </li>

        <?php
        }
        ?>
    </ol>
    
</body>
</html>