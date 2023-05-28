<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>

<style>
table {
  border-collapse: collapse;
  margin: 0 auto 1.5em;
}

.title {
  display: flex;
  justify-content: center;
  color: darkgreen;
}

.title2 {
  display: flex;
  justify-content: center;
  color: palevioletred;
  margin-bottom: 1em;
}

th{
  background-color: greenyellow;
}

td{
background-color: azure;
}

.relax {
  color: darkblue;
}

.work {
  color:darkgreen;
  font-weight: 600;
}

.dimi{
  color: brown;
}

small {
  font-style: oblique;
}

.nb {
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
  margin-bottom: 3em;
  font-size: 15px;
}

</style>


</head>
<body>
  
<?php
//Utilizand for, si nu foreach afisati intr-un tabel urmatoarele:
//orar (luni: activitatile dvs, marti la fel pana vineri), utilizand html si css

?>

<h2 class="title">Activitatile mele zilnice</h2>


<table border="1" align="center"> 
<tr><th>Luni</th><th>Marti</th><th>Miercuri</th><th>Joi</th><th>Vineri</th></tr>
<?php
for($ora=7, $i=1; $i<=17; $ora++, $i++):?>
<?php 
//$ora=7;
$activitati = <<<O
<small>Ora $ora:</small>
<ul>
<li>Ma joc cu Daria</li>
<li>Invat <strong>PHP</strong> fragmentar</li>
<li>Citesc cursuri fragmentar</li>

<ul>
O;

if($ora==7) {
  $activitati = <<<O
<small>Ora $ora:</small>
<ul class="dimi">
<li>Imi iau micul dejun</li>
<li>Beau ceai de musetel</li>
<li>Matur curtea</li>
<li>Spal curtea</li>
<ul>
O;
}


if($ora==11 || $ora ==18) {
  $activitati = <<<O
<small>Ora $ora:</small>
<ul class="relax">
<li>Ma relaxez</li>
<li>Ud gradina</li>
<ul>
O;
}



if($ora==17) {
  $activitati = <<<O
<small>Ora $ora:</small>
<ul>
<li>Invat <strong>MySQL</strong> sau <strong>JavaScript</strong> </li>
<li>Ma relaxez</li>
<ul>
O;
}

if($ora>=20)
{
  $activitati = <<<O
<small>Ora $ora:</small>
<ul class="work">
<li>Exersez PHP in computer</li>
<li>Rezolv exercitii incontinuu</li>
<li>Fac teme</li>
<ul>
O;
}

?>
<tr><td><?=$activitati?></td><td><?=$activitati?></td><td><?=$activitati?></td><td><?=$activitati?></td><td><?=$activitati?></td></tr>
<?php endfor;?>


</table>

<h3 class="title2">Ora: 00:00: Stingerea!</h3>
<small class="nb">Sambata si Duminica se repeta acelasi program fantastic.</small>

</body>
</html>


