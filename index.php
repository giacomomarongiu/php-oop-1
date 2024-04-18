<?php
// Dichiaro la classe Production
class Production
{
    public $title;
    public $language;
    public $vote;

    //Metodo construct
    public function __construct($title, $language, int $vote)
    {
        PHP_INT_MAX;
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;

    }

    //Creo un metodo che mi rende la lingua della produzione
    public function getLang()
    {
        return $this->language;
    }
}

//Dichiaro due istanze
$matrix = new Production("Matrix", "Italiano", 7);
$amelie = new Production("Il fantastico mondo di Amelie", "Francese", 9);
//Le stampo in pagina
var_dump($matrix);
var_dump($amelie);

//Stampo la lingua attraverso il metodo
var_dump($matrix->getLang());

?>