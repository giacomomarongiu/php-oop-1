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

//Dichiaro un istanza
$default = new Genre("Crime","Questa è una descrizione");
// La vedo
//var_dump( $default );