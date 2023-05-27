<?php

//Bucla For

/*
Ce este o bucla si la ce ne ajuta?
   Buclele in php de ajuta atunci cand scriem cod, dar vrem sa fie de mai multe ori, deci  in loc sa adaugam mai multe linii de cod utilizam buclele, el ruleaza din nou si din nou pana ii zicem sa se opreasca.

   Bucla For: de exemplu daca vrem sa afisam numerele de la 0 la 10, putem utiliza in felul urmator

   for ($i => contor)

   for ($i = 0; $i<=10; $i++) // $i => contor, $i++ incrementam

*/

// for($i=0; $i<=10; $i++) {
//   echo "Numerele sunt $i </br>";
//   if($i == 5) {
//     //break;
//     continue;
//   }
// }

// daca dorim de exe sa afiseze pana la 5 utilizam structura if
//daca dorim sa continuam, scriem continue in loc de break si va sari peste 5 in acest caz


//Bucla Foreach

//foreach o vom utiliza cand lucram cu array, un exemplu de utilizare este: 

  //lista as (noua variabila si anume $item in loc de $lista)

  // $list = array('rosu', 'galben', 'albastru');

  // foreach($lista as $item):

  
  //prima metoda de scriere a buclei foreach, adica inchidem php
  //a doua metoda

  // foreach($lista as $item) {
  //   echo "Culorile sunt {$item} <br>";
  // }

  //aici utilizam acolade {}

//Bucla While

//while ste la fel ca la for, doar ca aici stim cat vrem sa executam
//in schimb la for nu stim

//while (starea ete adevarata) {
//bloc de cod
//}

// $x = 1;

// while($x<=5) {
//   echo "Numerele sunt $x </br>";
//   $x++;
// }

//fara incrementare --- bucla moarta


//Bucla Do While

//sintaxa: 

// do{
// bloc de cod
// }while(conditia este adevarata);

// $x = 1;

// do {
//   echo "Numerele sunt $x </br>";
//   $x++;
// }while($x <= 10);

//exercitii

//Afisarea numerelor pare de la 1 la 20, folosind for

// for($i=1; $i<=20; $i++){
//   if($i%2 ==0) {
//     echo "Numerele pare sunt:" . $i . "<br>";
//   }
// }

//Verificarea daca un numar este prim cu bucla while

//facem o functie

// function isPrime($n) {
//   if($n<=1) {
//     return false;
//   }
//   $i = 2;

//   while($i<=sqrt($n)){
//     if($n % $i == 0) {
//       return false;
//     }
//     $i++;
//   }
//   return true;

// }

// $num = 17;

// if(isPrime($num)){
//   echo $num . "este un numar prim";
// }else {
//   echo $num . "nu este un numar prim";
// }
 

//utilizarea foreqach pentru a gasi valoarea maxima dintr-un array

// $numbers = [10, 5, 8, 20, 3, 1];
// $max = $numbers[0];

// foreach ($numbers as $number) {
//   if($number > $max) {
//     $max = $number;
//   }
// }

// echo "Valoarea maxima din array este " . $max;



//utilizarea for si foreach pentru a afisa un model de tip piramida

// $rows = 5;

// for($i = 1; $i <= $rows; $i++) {
//   for($j = 1; $j <= $i; $j++) {
//     echo "* ";
//   }
//   echo "\n";
// }

//greseala  - uitat de foreach



// $rows = 5;
// $spaces = $rows;

// for($i = 1; $i <= $rows; $i++) {
//   for($j=1; $j<=$spaces; $j++) {
//     echo "&nbsp;&nbsp;";
//   }
//   $spaces--;

// for($k = 1; $k<=2*$i-1; $k++) {
//   echo "*";
// }
// echo "</br>";
// }

//exercitiu cu foreach (afisarea numelui studentului + notele acestuia)

// $students = [
//   ["name" => "Maria",
//   "grades" => [8,7,9,6]
// ],
// [
//   "name"=>"Ciprian",
//   "grade" => [9,9,8,10]
// ],
// [
//   "name" => "Alex",
//   "grades" => [7,6,8,7]
// ]
// ];

// //calculam media, afisam

// foreach($students as $student) {
//   $name = $student["name"];
//   $grades = $studend["grades"];
//   $sum = 0;
//   foreach($grades as $grade) {
//     $sum += $grade;
//   }
// }

// $average = $sum / count($grades);

// echo "Studentul $name are urmatoarele note: ";

// foreach($grades as $index => $grade) {
//   echo $grade;

//   if ($index !== count($grades)-1) {
//     echo ", ";
//   }
// }
//   echo "</br>";
//   echo "Media {$average}";
//   echo "<br><br>";


//Ultimul cod, retrimis







?>