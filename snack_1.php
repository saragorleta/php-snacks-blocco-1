<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
$matches = [
  [
    'teamCasa'=> 'torino',
    'teamOspite'=> 'milano',
    'punteggio'=> '20 - 0'
  ],
  [
    'teamCasa'=> 'napoli',
    'teamOspite'=> 'roma',
    'punteggio'=> '3 - 8'
  ],
  [
    'teamCasa'=> 'cagliari',
    'teamOspite'=> 'genova',
    'punteggio'=> '15 - 21'
  ],
];

$lunghezzaMatches = count($matches);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php for($i = 0; $i < $lunghezzaMatches; $i++) {
    $teamCasa = $matches[$i]['teamCasa'];
    $teamOspite = $matches[$i]['teamOspite'];
    $punteggio=$matches[$i]['punteggio'];
  ?>

    <h2><?php echo $teamCasa .'<span> - </span>' .$teamOspite .'<span> | </span>' .$punteggio ?></h2>


  <?php  }   ?>


</body>
</html>
