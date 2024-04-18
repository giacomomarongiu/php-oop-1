<?php

//Lego il contenuto di un file json e lo converto in stringa
$myJsonData = file_get_contents('products.json');

//Lo vedo
//var_dump($myJsonData);

//Trasformo la stringa in un array associativo di php
$products = json_decode($myJsonData, true);

//La stampo
//var_dump($products);