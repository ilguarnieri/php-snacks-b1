<?php
    $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, iusto. Commodi quibusdam sint reiciendis quod architecto laborum assumenda facere nam. Perferendis eius adipisci illo nemo cum natus saepe nisi voluptatibus. Asperiores in animi culpa modi quas tempora suscipit assumenda amet. Tempore, magni necessitatibus alias eligendi illum similique eaque sunt ipsa. Quis nisi magni hic sint unde aliquid reiciendis repudiandae in. Sint vero voluptatibus doloremque repellendus, accusantium alias itaque corrupti impedit. Nostrum eveniet similique velit dicta labore dolores maiores aperiam iste. Quod, commodi facilis impedit quasi sint corporis. Esse, voluptatem eligendi. Debitis odio tenetur eligendi repellendus ullam rem aperiam voluptate repellat.";

    $paragrafi = explode('. ', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>

    <div>
        <?php
        for($i = 0; $i < count($paragrafi); $i++){
        ?>

        <p>
            <?php
            if($i < count($paragrafi) - 1){
                echo $paragrafi[$i] . '.';
            }else{
                echo $paragrafi[$i];
            }
            ?>
        </p>

        <?php
        }
        ?>
    </div>
    
</body>
</html>