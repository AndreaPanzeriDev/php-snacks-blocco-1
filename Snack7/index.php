<?php

$alunni = [
    [
        'nome' => 'Andrea',
        'cognome' => 'Panzeri',
        'voti' => [4,5,6]
    ],
    [
        'nome' => 'Dario',
        'cognome' => 'Panzeri',
        'voti' => [7,9,8]
    ]
];


for($i=0; $i < count($alunni); $i++){

    echo '<hr>';
    echo '<br/>';
    echo $alunni[$i]['nome'] . '-' . $alunni[$i]['cognome'];
    echo '<br/>';
    $media = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
    echo '<br/>';
    echo 'La media è: ' . $media;
    echo '<br/>';
    echo '<br/>';
    
}

?>