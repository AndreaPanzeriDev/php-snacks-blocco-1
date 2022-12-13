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

for($i=0; $i < count($posts); $i++){
    echo '<hr>';
    $key = array_keys($posts)[$i];

    echo $key;

    echo '<br/>';

    for($z=0; $z < count(($posts)[$key]); $z++){

        echo '<br/>';
        echo $posts[$key][$z]['title'];
        echo '<br/>';

        echo $posts[$key][$z]['author'];
        echo '<br/>';

        echo $posts[$key][$z]['text'];
        echo '<br/>';
    }

    
}
echo '<hr>';
?>

