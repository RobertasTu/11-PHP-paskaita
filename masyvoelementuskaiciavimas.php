<?php 

$masyvas = array(0,1,2,3,4,5,6,7,8,9);  //masyve turim 10 elementu//klienta
//atvaizduoti visus masyvo elementus
$k = 0;
for($i=0; $i<count($masyvas); $i++) {
    echo $masyvas[$i];
    //0
    //1
    //...
    //9
    echo '<br>';
    $k++;
    }

    //ar sitas kintamasis galioja uz ciklo ribu? - negalioja, po ciklo gali gauti atsitiktine reiksme
    //ir jeigu galioja kokia jo reiksme? Igauna atsisitiktine reiksme

    echo 'i reiksme po ciklo'.$i; //negalioja
    echo 'k reiksme po ciklo'.$k; //masyvo elementu skaicius - 10

    $i = 0; //$indeksas
//tas pats su foreach, $i - nera
foreach($masyvas as $elementas) {
    echo $elementas;
    echo '<br>';
    $i++; //ikeleme indeksa
}
 //ar sitas kintamasis galioja uz ciklo ribu? - Galioja
    //ir jeigu galioja kokia jo reiksme? - elementu skaicius masyve

echo 'i reksme po foreach'.$i;

?>