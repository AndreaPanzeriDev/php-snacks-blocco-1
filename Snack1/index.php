

<?php
$partite[
    [
        'partita' => 'Olimpia Milano - Cantú',
        'punteggiocasa' =>  55,
        'punteggioospite' => 60,
    ],
    [
        'partita' => 'Brescia',
        'punteggiocasa' =>  20,
        'punteggioospite' => 6230,
    ],

    [
        'partita' => 'Olimpia Milano - Cantú',
        'punteggiocasa' =>  33,
        'punteggioospite' => 34,
    ],
]

?>

<ul>
    <?php for($i=0; $i < count($partite); $i++){?>
        <li><?php $partite[$i]['partita']?></li>
    <?php }?>
</ul>