<?php
//Importo la classe Genre
require __DIR__ . '/Genre.php';

// Dichiaro la classe Production
class Production
{
    public $title;
    public $language;
    public $vote;
    public $genre;

    //Metodo construct + che chiede in input un istanze genre!
    public function __construct($title, $language, int $vote, Genre $genre)
    {

        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;

    }

    //Creo un metodo che mi rende la lingua della produzione
    public function getLang()
    {
        return $this->language;
    }
}

//Dichiaro due istanze
$matrix = new Production("Matrix", "Italiano", 7, new Genre("Action", "Descrizione"));
$amelie = new Production("Il fantastico mondo di Amelie", "Francese", 9, new Genre("Comedy", "Descrizione"));
