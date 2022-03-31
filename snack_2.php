<?php

    $access = 0;

    if( !isset($_GET['name']) ){

        echo 'Inserisci il tuo nome';

    }elseif( !isset($_GET['mail']) ){

        echo 'Inserisci la tua email';

    }elseif( !isset($_GET['age']) ){

        echo 'Inserisci la tua età';

    }else{

        if( strlen($_GET['name']) <= 3 ){

            echo 'Inserisci un nome valido';

        }elseif(
            !strpos($_GET['mail'], '.', -4) ||
            !strpos($_GET['mail'], '@') ){

            echo 'Inserisci una email valida';
    
        }elseif( !is_numeric($_GET['age']) ){
    
            echo 'Inserisci un\'età valida';
    
        }else{

            $access = 1;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <?php
    if($access == 1){
        ?>

        <h1>ACCESSO CONSENTITO</h1>

        <?php
    }else{
        ?>

        <h1>ACCESSO NEGATO</h1>

        <?php
    }
    ?>

</body>
</html>