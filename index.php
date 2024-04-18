<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ .'/db.php';
//Le stampo in pagina
var_dump($matrix);
var_dump($amelie);

//Stampo la lingua attraverso il metodo
var_dump($matrix->getLang());

//Stampo l'array convertito dal json
var_dump($products);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP1 </title>
    <script src="https://kit.fontawesome.com/3a46370e2f.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar bg-primary">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand fw-bold" href="#">
                    Productions <i class="fa-solid fa-video"></i>
                </a>
            </div>
        </nav>
    </header>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>