<?php

//CORECTARE EROARE
 
          // $students = [
  
          //     [
          //         "name" =>"Maria",
          //         "grades" =>[8,7,9,6]
          //     ],
          //     [
          //         "name"=>"Ciprian",
          //         "grades"=>[9,9,8,10]
          //     ],
          //     [
          //         "name"=>"Alex",
          //         "grades"=>[7,6,8,7]
          //     ]
          //     ];

          //     // calculam media fiecarui student si afisam media
          //         foreach ( $students as $student){
                   
          //             $name = $student["name"];
          //             //echo $name;
          //             $grades = $student["grades"];
          //             //print_r($grades);
          //             $sum = 0;
          //             foreach ($grades as $grade){
          //                 $sum += $grade;
          //             }


          //         echo "Studentul $name are urmatoarele note : ";

          //         foreach ($grades as $index=>$grade) {
          //             echo $grade;
          //             if ($index != count($grades) - 1) {
          //                 echo ", ";
          //             }
          //             }

                      
          //            $average = $sum / count($grades);


          //             echo "</br>";
          //             echo "Media {$average}";
          //             echo "<br><br>"; 
                                                  
          //         }



//2. EXERCITIUL 2: utilizand bucla for sau while, doresc sa fie afisat CNP(random) iar ingrosat cu rosu sa fie ultimile 6 cifre din CNP utilizand bold si css


//editare primele 6 cifre din cnp random

//prima cifra: 1-8 (index 0)
//ultimele 2 cifre an nastere (index 1 si 2)
//luna nasterii intre 01 si 12 (index 3 si 4)
//ziua nasterii intre 01 si 28/29/30/31 (index 5 si 6)

$cnp = "";

for($i=1; $i<=7; $i++) {
if ($i==1) {
  $cnp .= strval(rand(1,8));
}
if($i==2 || $i==3) {
  $cnp .= strval(rand(0,9));
}

if($i==4) {
  
  $zi = strval(rand(1,12));
  
  if($zi>=10 && $zi<=12) {
     $cnp.= $zi;
  }
  elseif ($zi>=1 && $zi<=9) {
    $concat = "0".strval($zi);
    $cnp = $cnp . $concat;
  }
    }

  if($i==6) {
   
            $zi2 = strval(rand(1,31));
            if($zi2>=10 && $zi2<=31) {
               $cnp.= $zi2;
            }
            elseif ($zi2>=1 && $zi2<=9) {
              $concat2 = "0".strval($zi2);
              $cnp = $cnp . $concat2;
            }
      }
    }


$cnp3 = "";

for($i=1; $i<=6; $i++) {
$k = rand(0,9);
$cnp3 .= $k;
}

echo "CNP: ".$cnp;
 ?><span style="color:red; font-weight: bold;"><?=$cnp3?></span>


