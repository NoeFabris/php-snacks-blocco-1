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
    ],
];


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
    <main>
    
    <h1>Posts</h1>
    <ul>
    <?php
    $keyMap = array_keys($posts);

    for ($i=0; $i < count($posts); $i++) { 
        $key = $keyMap[$i];
        $value = $posts[$key];
    ?>
        <li> <?php echo $key ?>
            <ul><?php 
            for ($y=0; $y < count($value); $y++) { 
                $singlePost = $value[$y];
            ?>
                <li>
                <?php 
                echo $singlePost['title'];
                echo $singlePost['author'];
                echo $singlePost['text'];
                ?>
                </li>
            <?php } ?>
            </ul>
        </li>
    <?php
    }
    ?>
    </ul>
    
    </main>
</body>
</html>