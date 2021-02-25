 <!-- PHP Snack 2:
 Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che:
 1. name sia più lungo di 3 caratteri,
 2. mail contenga un punto e una chiocciola
 3. age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->

<?php

$name = $_GET['nome'];
$mail = $_GET['mail'];
$age = $_GET['eta'];

$validazioneAge= is_numeric($age);

$messaggio = 'accesso consentito';

if((empty($name)) || (empty($mail)) || (empty($age))) {
  $messaggio = "alcuni dati sono incompleti";
}
if (strlen($name) < 3){
  $messaggio = "il nome deve essere più lungo di tre caratteri";
}
if ((strpos($mail, '@')) && (strpos($mail,'.'))) {

} else {
  $messaggio = "la mail non è ben formata";
}
if (!$validazioneAge){
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

<?php echo $messaggio; ?>


</body>
</html>
