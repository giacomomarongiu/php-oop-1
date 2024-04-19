<?php
require_once __DIR__ . '/Production.php';
class TVSerie extends Production
{
    public $seasons= 300;


}

//Faccio un tentativo
$defaultTV = new TVSerie("Pippo", "Arabo", 5, new Genre("Comedy", "Lorem"));

//Stampo
var_dump($defaultTV);