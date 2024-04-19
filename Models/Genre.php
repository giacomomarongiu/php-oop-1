<?php
// Dichiaro la classe Production
class Genre
{
    public $genres=[];
    public $description;

    //Metodo construct
    public function __construct(array $args, string $description)
    {
        foreach ($args as $genre) {
        array_push($this->genres, $genre);
        }

        $this->description = $description;
    }

}
/* foreach ($variable as $key => $value) {
    # code...
} */
//Dichiaro un istanza
$default = new Genre(["Pippo", "Pluto"],"Questa è una descrizione");
// La vedo
var_dump( $default );