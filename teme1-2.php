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

$cnp = "";

for($i=1; $i<=7; $i++) {
$j = rand(0,9);
$cnp .= $j;
}

//echo $cnp;


//editare ultimele 6 cifre din cnp random rosu bold

$cnp2 = "";

for($i=1; $i<=6; $i++) {
$k = rand(0,9);
$cnp2 .= $k;
}

echo "CNP:".$cnp;
?><span style="color:red; font-weight: bold;"><?=$cnp2?></span>


