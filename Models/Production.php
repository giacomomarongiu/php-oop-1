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
    public $type;

    //Metodo construct + che chiede in input un istanze genre!
    public function __construct($title, $language, int $vote, $type, Genre $genre)
    {

        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->type = $type;
        $this->genre = $genre;

    }

    //Creo un metodo che mi rende la lingua della produzione
    public function getLang()
    {
        return $this->language;
    }
}

//Dichiaro due istanze
//$matrix = new Production("Matrix", "Italiano", 7, "Movie", new Genre("Action", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, cumque."));
//$amelie = new Production("Il fantastico mondo di Amelie", "Francese", 9, "Movie", new Genre("Comedy", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, cumque."));
