
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
       table {
         border-collapse: collapse;
       }
       th,td {
        padding: 1em;
       }
  </style>
</head>
<body>
  
<?php

//3. Afisati intr-un tabel urmatoarele: costul produsului (ales de voi) pana la 10 de exemplu: lapte, pretul 2.89 inmultit cu cat pana la 10 (10 fiind cantitatea)

$titlu = <<<TITLU
<h3 style: align="center">Pretul produsului lapte in functie de cantitate:</h3>
TITLU;

echo $titlu;

?>


<table border="1" align="center"> 
<tr><th>Pret</th><th>Cantitate</th></tr>
<?php
for($cant=1, $i=1; $i<=10; $cant++, $i++):?>
<?php $pret = 3;
$rezultat = $pret*$cant;

?>
<tr><td><?=$rezultat?></td><td><?=$cant?></td></tr>
<?php endfor;?>


</table>



</body>
</html>

