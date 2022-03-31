<?php

    $numbers = [];

    do{
        $num = rand(1, 100);

        if(!in_array($num, $numbers)){
            $numbers[] = $num;
        };

    }while(count($numbers) < 15);

    var_dump($numbers);
?>