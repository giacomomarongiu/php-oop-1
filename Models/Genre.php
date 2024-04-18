<?php
// Dichiaro la classe Production
class Genre
{
    public $genre_name;
    public $description;


    //Metodo construct
    public function __construct(string $genre_name, string $description)
    {
        $this->genre_name = $genre_name;
        $this->description = $description;

    }

}

//Dichiaro due istanze
$default = new Genre("Crime","Questa è una descrizione");

var_dump( $default );