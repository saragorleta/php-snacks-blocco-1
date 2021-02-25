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
 
 <!-- PHP Snack 2:
 Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che:
 1. name sia più lungo di 3 caratteri,
 2. mail contenga un punto e una chiocciola
 3. age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php

$name = $_GET ['nome'];
$mail = $_GET['mail'];


$age = $_GET ['eta'];
$validazioneAge= is_numeric($age);

$messaggio = '';

if(empty($name)) || (empty($mail)) || (empty($age)) {
  $messaggio = "alcuni dati sono incompleti";
}
if (strleng($name < 3)){
  $messaggio = "il nome deve essere più lungo di tre caratteri"
}
if ((strpos($mail, '@')) && (strpos($mail,'.'))) {
  $messaggio = 'ok';
} else {
  $messaggio = "la mail non è ben formata";
}
if (!is_numeric($validazioneAge)){
  $messaggio = "non stai inserendo un numero";
}

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
    $teamCasa = $matches[$i]['teamCasa '];
    $teamOspite = $matches[$i]['teamOspite '];
    $punteggio=$matches[$i]['punteggio '];
  ?>

    <h2><?php echo $teamCasa ?></h2>
     <span> - </span>
    <h2><?php echo $teamOspite ?></h2>
     <span> | </span>
    <h3><?php echo $punteggio ?></h3>

  <?php  }   ?>


</body>
</html>
