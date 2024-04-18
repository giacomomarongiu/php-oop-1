<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/db.php';
//Le stampo in pagina
//var_dump($matrix);
//var_dump($amelie);

//Stampo la lingua attraverso il metodo
//var_dump($matrix->getLang());

//Stampo l'array convertito dal json
//var_dump($products);

//Il mio scopo è creare un altro array di products di istanze di Production
//Dichiaro il mio array
$productions = [];
//Ci pusho le istanze già create
array_push($productions, $matrix, $amelie);

//Cilo nel mio array ricavato dal mio json e decodato in db
foreach ($products as $key => $product) {
    //Verifico cosa stampo
    //var_dump($product);
    // Pusho nel mio array una nuova istanza Production a cui passo come parametri
    // le caratteristiche che mi servono di ogni prodotto
    array_push($productions, new Production($product['title'], $product['language'], $product['vote']));
}

//Eccolo!
//var_dump($productions);
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

<body class="bg-secondary ">
    <header class="">
        <?php include __DIR__ . '/Layout/nav.php'; ?>
    </header>

    <!--Main-->
    <main>
        <div class="container my-2">
            <div class="row">
                <?php foreach ($productions as $key => $production): ?>
                    <div class="col-4 g-2">
                        <div class="card h-100">
                            <h5 class="card-header h-50 bg-dark text-white"><?php echo $production->title ?></h5>
                            <div class="card-body">
                                <h5 class="card-title">Lingua: <?php echo $production->language ?></h5>
                                <p class="card-text">Voto: <?php echo $production->vote ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <!--footer-->
    <footer class="">
        <?php include __DIR__ . '/Layout/nav.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>