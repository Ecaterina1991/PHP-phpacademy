<?php
//  Utilizand while + if, else, if ( afisati produsul $scaune, daca cumperi 10 scaune primesti o reducere de 5% , daca cumperi 30 scaune primesti 10% reducere, iar daca cumperi 50 de scaune primesti 90% reducere, pretul o sa fie de 19 lei

//am modificat 30 scaune in loc de 10 - cred ca e eroare de tastare 10


$nr_scaune = 1;
$variabila_discount = 5;//sau 10 sau 90

echo "&nbsp;"."Scaune"."<br>"."<br>";

while ($nr_scaune<=50) {
 
  if($nr_scaune==10) {

  $pret = 19;
  $pret_total = $pret * $nr_scaune;
  $discount = $variabila_discount * $pret_total/100;
  $pret_final= $pret_total-$discount;

    echo "Daca cumperi $nr_scaune scaune primesti o reducere de $variabila_discount% si pretul o sa fie $pret_final lei." ."<br>";
  }
  elseif($nr_scaune==30) {

  $variabila_discount = 10;
  $pret = 19;
  $pret_total = $pret * $nr_scaune;
  $discount = $variabila_discount * $pret_total/100;
  $pret_final= $pret_total-$discount;

    echo "Daca cumperi $nr_scaune scaune primesti o reducere de $variabila_discount% si pretul o sa fie $pret_final lei" ."<br>";
  }

  if($nr_scaune==50){

  $variabila_discount = 90;  
  $pret = 19; 
  $pret_total = $pret * $nr_scaune;
  $discount = $variabila_discount * $pret_total/100;
  $pret_final= $pret_total-$discount;
  
    echo "Daca cumperi $nr_scaune scaune primesti o reducere de $variabila_discount% si pretul o sa fie $pret_final lei" ."<br>";
  }
   $nr_scaune++;
}


?>