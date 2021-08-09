<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 Paskaita Klases ir objektai</title>
</head>
<body>

<?php 
//Klases ir objektai

//Objektas - paimam ir susikuriam, ty pats objektas neturejo sablono
//PHP sukurtume objekta, visu pirma objektas turi tureti savo sablona. Sablonas  - klase
//Klase - yra objekto sablonas, pagal kurio duomenis yra kuriamas objektas
//Objektas - tai tam tikras kintamuju ir metodu(vidiniu objekto funkciju rinkinys)
//Objekto sablonas gali atlikti tam tikra funkcija, masyvas to negali, jame tik duomenys saugomi

// Automobilio objekta, klases pavadinimas is didziosios raides
class Automobilis {
    //Modelis
    //marke
    //gamybos metai

    //access modifier
    //public - kai bus sukurtas objekatas , tas kintamasis arba metodas bus pasiekiamas uz objekto/klases ribu
    //private - kintamasis arba metodas gali bui naudojamas tik pacioje klaseje
    //protected - kintamasis arba metodas gali buti naudojamas pacioje klaseje ir jos vaikinese klases
    protected $duruSkaicius;
    private $spalva;  //tik klases ribose 
    public $modelis;
    public $marke;
    public $gamybosMetai;

    //turim sukurti - metodus(vidines funkcijos)
    function nustatome_kintamuosius($a, $b, $c) {
        $this->modelis = $a;
        $this->marke = $b;
        $this->gamybosMetai = $c;
        $this->spalva = 'Raudona';
        $this->duruSkaicius = 5;
    }
}


//$automobilis - yra objektas
$automobilis = new Automobilis();
//objekta galime issivesti su var_dump komanda

var_dump($automobilis);

$automobilis->nustatome_kintamuosius('VW', 'Passat', '2010');

//O kaip issivesti tik automobilio modeli
echo $automobilis->modelis;
echo '<br>';
echo $automobilis->marke;
echo '<br>';
echo $automobilis->gamybosMetai;
echo '<br>';

//su private tipo kintamaisiais neveikia!!!!!
// $automobilis->spalva = 'Melyna';
// echo $automobilis->spalva; //error
// echo '<br>';
echo $automobilis->duruSkaicius; //error
echo '<br>';



//ar galima padaryti taip?
$naujasKintamasis = $automobilis->modelis;
echo $naujasKintamasis;

$automobilis->modelis = 'BMW';


echo '<br>';
echo $automobilis->modelis;


var_dump($automobilis);


?>
    
</body>
</html>