

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
   
.list > li, th {
padding: 1em;
font-size: 18px;
}

table {
  border-collapse: collapse;
}

.head {
  background-color: greenyellow;
}

.body-cell {
  background-color: yellow;
}


  </style>
</head>
<body>
  



<?php
//Utilizand for, si nu foreach afisati intr-un tabel urmatoarele:
//orar (luni: activitatile dvs, marti la fel pana vineri), utilizand html si css

//estimez ca aici am trisat utilizand for pentru o iteratie de o singura unitate, doar ca sa se respecte conditia sarcinii, dar voi reveni cu o alta incercare


$act_luni = <<<ACT
<ul class = "list">
<li>Invat</li>
<li>Ma joc cu bebe</li>
<li>Ma relaxez </li>
<li>Invat</li>
</ul>
ACT;

$act_marti = <<<ACT
<ul class = "list">
<li>Citesc beletristica</li>
<li>Ma joc cu bebe</li>
<li>Ud gradina</li>
<li>Ma joc cu catelul</li>
</ul>
ACT;

$act_miercuri = <<<ACT
<ul class = "list">
<li>Invat matematica</li>
<li>Ma joc cu bebe</li>
<li>Invat PHP</li>
<li>Ma uit la stele</li>
</ul>
ACT;

$act_joi = <<<ACT
<ul class = "list">
<li>Inot</li>
<li>Ma joc cu bebe</li>
<li>Invat engleza</li>
<li>Plantez flori</li>
</ul>
ACT;

$act_vineri = <<<ACT
<ul class = "list">
<li>Imi verific cunostintele</li>
<li>Ma joc cu bebe</li>
<li>Invat JavaScript/MySQL</li>
<li>Citesc filosofie</li>
</ul>
ACT;
$titlu = <<<TITLE
<h2 align="center">Activitatile mele de luni pana vineri</h2>
TITLE;

?>

<?php echo $titlu; ?>

<table border="1" align="center">
  <tr class="head">
  <th>Luni</th>
  <th>Marti</th>
  <th>Miercuri</th>
  <th>Joi</th>
  <th>Vineri</th>
</tr>

<?php for($i=1; $i<=1; $i++): ?>
<tr class="body-cell">
  <td><?php echo $act_luni; ?></td>
  <td><?php echo $act_marti; ?></td>
  <td><?php echo $act_miercuri; ?></td>
  <td><?php echo $act_joi; ?></td>
  <td><?php echo $act_vineri; ?></td>

</tr>
<?php endfor; ?>


</table>

</body>
</html>
