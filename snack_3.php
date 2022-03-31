<?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ]
    ];

    $keys = array_keys($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>

    <?php
    for($i = 0; $i < count($keys); $i++){

        $data = $keys[$i];
        $posts_data = $posts[$data];
    ?>

    <!-- stampa data -->
    <h3>
        <?php
        echo $data;
        ?>
    </h3>

    <ul>
        <?php
        for($j = 0; $j < count($posts_data); $j++){

            $post = $posts_data[$j];
        ?>

        <!-- stampa post -->
        <li>
            <?php
            echo "{$post['title']} - {$post['text']} <br> Inviato da {$post['author']}";
            ?>
        </li>

        <?php
        }
        ?>

    </ul>
    <?php
    }
    ?>    
</body>
</html>