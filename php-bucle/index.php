<?php


// Bucla For

    /* Ce este o bucla si la ce ne ajuta?
        Buclele in php ne ajuta atunci cand scriem cod, dar vrem sa fie de mai multe ori, deci in loc
    sa adaugam mai multe linii de cod utilizam buclele, el ruleaza din nou si din nou pana cand ii zicem sa se
    opreasca


    - Bucla For : de exemplu daca vrem sa afisam numerele de la 0 la 10, putem utiliza in felul urmator

        for( $i => contor )

        for($i = 0; $i<=10; $i++) // $i = contor , $i<= 10 ( afisam numerele de la 0 la 10 ) , incrementam + 1 ( adaugam 1 )



     *
     */

//        for($i = 0; $i <= 10; $i++){
//
//            if($i == 5){
//                // daca $i  este 5, continua si sari peste 5*
//                continue;
//            }
//
//            echo "Numerele sunt $i </br>";
//
//
//        }
//
//
//        /*
//         * Daca dorim de exemplu sa afiseze pana la 5 utilizam structura if
//         *
//         * Daca dorim sa continuam utilizam continue in loc de break, si va sari peste pasul numarul 5
//         *
//         */




// Bucla Foreach


    // Foreach o vom utiliza cand lucram cu array, un exemplu de utilizare este:

    // lista as ( noua variabila si anume $item in loc de $lista )

    $lista = array('rosu','galben','albastru');


//        foreach ($lista as $item):?>
<!---->
<!--        <p>Culorile sunt : --><?php //= $item; ?><!--</p>-->
<!---->
<!--        --><?php //endforeach;


    // a doua metoda:


//        foreach ( $lista as  $item ){
//
//            echo "Culorile sunt {$item} <br>";
//
//        }
//
        // aici utilizam acolade { }






        // utilizam : aceasta este o prima metoda de scriere a buclei foreach adica inchidem php si deschidem taguri normale de html

        // dupa la urma mai mic semnul intrebari si php deschidem php si inchidem bucla foreach


// Bucla While

    // while este la fel ca la for, doar ca aici stim cat vrem sa executam
        // in schimb la for nu stim


     // while ( starea este adevarata ) {
//      bloc de cod
//
//      }


//        $x = 1;
//
//        while($x <= 5){
//            echo "Numerele sunt $x </br>";
//
//            $x++;
//        }


        // daca nu adaugam incrementul ++ ( o sa fie o bucla moarta, si se va repeta la infinit )







// Bucla Do While

    // sintaxa :

//
//        do{
//            bloc de cod
//
//        }while(conditia este adevarata);


//    $x = 1;
//
//    do{
//        echo "Numerele sunt $x </br>";
//        $x++;
//    }while($x <=10);
//



        // exercitii





            // Afisarea numerelor pare de la 1 la 20, folosind for



//                for($i = 1; $i<=20; $i++){
//
//                    if($i % 2 == 0){
//                        echo 'Numerele pare sunt : ' . $i . '<br>';
//                    }
//
//                }

        // Verificarea daca un numar este prim utilizand bucla while

            // facem o functie ( despre functii o sa vorbim data viitoare )

//                function isPrime($n){
//
//                        if($n <=1){
//                            return false;
//                        }
//                        $i = 2;
//
//                        while($i <= sqrt($n)){
//                            if($n % $i == 0){
//                                return false;
//                            }
//                            $i++;
//                        }
//                        return  true;
//
//
//                }
//                $num = 302;
//
//                        if(isPrime($num)){
//                            echo $num . " este un numar prim";
//                        } else {
//                            echo $num . " nu este un numar prim";
//                        }





        // utilizarea foreach pentru a gasi valoarea maxima dintr-un array



//            $numbers = [10,5,8,20,3,23,1];
//
//            $max = $numbers[0];
//
//            foreach ($numbers as $number){
//                if($number > $max){
//                    $max = $number;
//
//                }
//            }
//            echo "Valoarea maxima din array este " . $max;
//
//
//




        // utilizarea for si foreach pentru a afisa un model de tip piramida


//            $rows = 5;
//
//            for($i = 1; $i <= $rows; $i++){
//                for($j = 1; $j <= $i; $j++){
//                    echo "* ";
//                }
//                echo "\n";
//            }  greseala mea am uitat de foreach


//            $rows = 5;
//            $spaces = $rows;
//
//            for($i = 1; $i <= $rows ; $i++){
//                for($j = 1; $j <= $spaces;$j++){
//                    echo "&nbsp;&nbsp;";
//                }
//                $spaces--;
//
//                for($k = 1;$k<=2 * $i - 1;$k++ ){
//                    echo "*";
//                }
//
//                echo "</br>";
//            }



    // un alt exemplu sa facem o inima

     // exemplu cu inima o sa o trimit dupa mi-am dat seama ca este prea complex pentru voi momentan :)


//        $rows = 6;
//
//        for($row = 1; $row <=$rows; $row++){
//
//            for($col = 1; $col <= $rows; $col++){
//
//                if($row == 1 && ($col % 3 == 0)) || ($row == 2 && $col == 2 || $col == 4) || ($row == 3) && ($col == 1)
//
//            }
//
//        }





        // exercitiu cu foreach ( afisarea numelui studentului + notele acestuia )

//
//            $students = [
//
//                [
//                    "name" =>"Maria",
//                    "grades" =>[8,7,9,6]
//
//                ],
//                [
//                    "name"=>"Ciprian",
//                    "grades"=>[9,9,8,10]
//
//                ],
//                [
//                    "name"=>"Alex",
//                    "grades"=>[7,6,8,7]
//
//                ]
//                ];
//
//                // calculam media fiecarui student si afisam media
//
//
//                    foreach ( $students as $student){
//                        $name = $student["name"];
//                        $grades = $student["grades"];
//
//                        $sum = 0;
//
//                        foreach ($grades as $grade){
//                            $sum += $grade;
//                        }
//
//                    }
//
//                    $average = $sum / count($grades);
//
//                    echo "Studentul $name are urmatoarele note : ";
//
//                    foreach ($grades as $index=>$grade) {
//                        echo $grade;
//
//                        if ($index != count($grades) - 1) {
//
//                            echo ", ";
//
//                        }
//                        }
//                        echo "</br>";
//                        echo "Media {$average}";
//                        echo "<br><br>";

                    // provocare pentru data viitoare: gasiti eroare ce nu face sa afiseze toti studenti, eu am gasit-o, va las si pe voi


                        // 2. Utilizand bucla for sau while, doresc sa fie afisat CNP ( random ) iar ingrosat cu rosu sa fie ultimile 6 cifre din CNP utilizand bold si css


                        // 3. Afisati intr-un tabel : urmatoarele, costul produsului ( ales de voi ) pana la 10  de exemplu :  lapte , pretul 2.89, inmultit cu cat pana la 10 ( 10 fiind cantitatea )
                        // 4. Utilizand for, si nu foreach afisati intr-un tabel urmatoarele:

                        // Orar ( luni : activitatile dvs, marti la fel pana vineri ) , utilizand html si css
//
//
//                      // 5. Utilizand while + if, else, if ( afisati produsul $scaune, daca cumperi 10 scaune primesti o reducere de 5% , daca cumperi 10 scaune primesti 10% reducere, iar daca cumperi 50 de scaune primesti 90% reducere, pretul o sa fie de 19 lei


                // pana pe pe 25 iunie, dar o sa revin cu o lista de exercitii + exercitii la javascript :)