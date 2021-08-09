<?php 

//Funkcija(metodas) kuri pasileidzia objekto sukurimo metu - kondstruktorius

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
    function __construct($a, $b, $c) {         //__construct - fja konstruktorius
        $this->modelis = $a;
        $this->marke = $b;
        $this->gamybosMetai = $c;
        $this->spalva = 'Raudona';
        $this->duruSkaicius = 5;
    }
}

//objektas
$automobilis = new Automobilis('VW', 'Passat', '2010');
$automobilis1 = new Automobilis('BMW', '320', '2003');
//objekta galime issivesti su var_dump komanda

$automobiliu_masyvas = array($automobilis, $automobilis1);

var_dump($automobiliu_masyvas);

var_dump($automobilis);
var_dump($automobilis1);

// $automobilis->nustatome_kintamuosius('VW', 'Passat', '2010');



?>