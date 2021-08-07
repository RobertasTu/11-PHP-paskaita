<?php 

//Uzduociu tvarkytuvas.
//Statusai: nepradetos, atliekamos ir uzbaigtos
//Kiekvienas is statusu turi po penkias uzduotis, kurios turi pavadinima ir atlikimo laika
//Trys mygtukai, kurie atvaizduoja skirtingams statusui priklausancias uzduotis


$nepradetos = array(
     array(
         "pavadinimas" => "Pirma nepradeta uzduotis",
         "atlikimo_laikas" => "2021-08-07",
     ),
     array(
         "pavadinimas" => "Antra nepradeta uzduotis",
         "atlikimo_laikas" => "2021-08-08",
     ),
     array(
         "pavadinimas" => "Trecia nepradeta uzduotis",
         "atlikimo_laikas" => "2021-08-09",
     ),
     array(
         "pavadinimas" => "Ketvirta nepradeta uzduotis",
         "atlikimo_laikas" => "2021-08-10",
     ),
     array(
         "pavadinimas" => "Penkta nepradeta uzduotis",
         "atlikimo_laikas" => "2021-08-11",
     ),
 );
 
 $atliekamos = array(
     array(
         "pavadinimas" => "Pirma atliekama uzduotis",
         "atlikimo_laikas" => "2021-08-07",
     ),
     array(
         "pavadinimas" => "Antra atliekama uzduotis",
         "atlikimo_laikas" => "2021-08-08",
     ),
     array(
         "pavadinimas" => "Trecia atliekama uzduotis",
         "atlikimo_laikas" => "2021-08-09",
     ),
     array(
         "pavadinimas" => "Ketvirta atliekama uzduotis",
         "atlikimo_laikas" => "2021-08-10",
     ),
     array(
         "pavadinimas" => "Penkta atliekama uzduotis",
         "atlikimo_laikas" => "2021-08-11",
     ),
 );
 
 $uzbaigtos = array(
     array(
         "pavadinimas" => "Pirma uzbaigta uzduotis",
         "atlikimo_laikas" => "2021-08-07",
     ),
     array(
         "pavadinimas" => "Antra uzbaigta uzduotis",
         "atlikimo_laikas" => "2021-08-08",
     ),
     array(
         "pavadinimas" => "Trecia uzbaigta uzduotis",
         "atlikimo_laikas" => "2021-08-09",
     ),
     array(
         "pavadinimas" => "Ketvirta uzbaigta uzduotis",
         "atlikimo_laikas" => "2021-08-10",
     ),
     array(
         "pavadinimas" => "Penkta uzbaigta uzduotis",
         "atlikimo_laikas" => "2021-08-11",
     ),
 );
 
 
 echo "<table>";
 
 if($kazkoksKintamasisPerGet == "0") {
     $uzduotys = $nepradetos;
     $kategorijosTekstas = "Nepradetos";
 } else if ($kazkoksKintamasisPerGet == "1") {
     $uzduotys = $atliekamos;
     $kategorijosTekstas = "Atliekamos";
 } else if ($kazkoksKintamasisPerGet == "2") {
     $uzduotys = $uzbaigtos;
     $kategorijosTekstas = "Uzbaigtos";
 }
 
 
 foreach ($uzduotys as $eilute)
 {
     echo "<tr>";
     echo "<td>";
     echo  $kategorijosTekstas;
     echo "</td>";
     foreach($eilute as $stulpelis) {
         echo "<td>";
             echo $stulpelis;
         echo "</td>";
     }
     echo "</tr>";
 }
 
 echo "</table>";
 // $uzduotys = array(
     // array(), //0 - nepradetos
     // array(),// 1 - atliekamos
     // array() // 2 - uzbaigtos
 // );
 

?>