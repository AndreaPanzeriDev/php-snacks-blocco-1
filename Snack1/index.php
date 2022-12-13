

<?php
$studenti = [
    [
      'partita' => 'Milano - Bologna',
      'punteggioCasa' => 58,
      'punteggioOspiti' =>  56
    ],
    [
        'partita' => 'Milano - Bologna',
        'punteggioCasa' => 58,
        'punteggioOspiti' =>  56
    ],
    [
        'partita' => 'Milano - Bologna',
        'punteggioCasa' => 58,
        'punteggioOspiti' =>  56
    ],
  ];

?>


<ul>
    <?php for ($i=0; $i < count($studenti); $i++ ){ ?>
        <li>
            <?php echo $studenti[$i]['partita'] . ' | ' . $studenti[$i]['punteggioCasa'] . ' - ' . $studenti[$i]['punteggioOspiti']?>
        </li>
    <?php } ?>
</ul>

