<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TVSerie.php';
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
//array_push($productions, $matrix, $amelie);

//Cilo nel mio array ricavato dal mio json e decodato in db
foreach ($products as $key => $product) {
    //Verifico cosa stampo
    //var_dump($product);
    // Pusho nel mio array una nuova istanza Production a cui passo come parametri
    // le caratteristiche che mi servono di ogni prodotto

    // Devo gestire la situazione in cui il prodotto è serie TV o Film
    if ($product['type'] == "Movie") {
        //Costruisco l'istanza con il "metodo genitore"
        array_push(
            $productions,
            new Movie(
                $product['title'],
                $product['language'],
                $product['vote'],
                $product['type'],
                new Genre(
                    $product['genre'],
                    $product['description']
                )
            )
        );
        //Essendo "Movie" l'istanza ha anche le proprietà "duration" e "profits"
        //Quindi prendo l'ultimo elemento aggiunto con end
        //Verifico
        //var_dump(end($productions));
        //Imposto la proprietà dell'istanza con il "metodo figlio"
        (end($productions))->setDuration($product['duration']);
        //Imposto la proprietà dell'istanza con il "metodo figlio"
        (end($productions))->setProfits($product['money']);
        //Verifico
        //var_dump(end($productions));

    } elseif ($product['type'] == "Serie") {
        //Costruisco l'istanza con il "metodo genitore"
        array_push(
            $productions,
            new TVSerie(
                $product['title'],
                $product['language'],
                $product['vote'],
                $product['type'],
                new Genre(
                    $product['genre'],
                    $product['description']
                )
            )
        );
        //Essendo "Serie" l'istanza ha anche la proprietà "seasons"
        //Quindi prendo l'ultimo elemento aggiunto con end
        //Verifico
        //var_dump(end($productions));
        //Imposto la proprietà dell'istanza con il "metodo figlio"
        (end($productions))->setSeasons($product['season']);
        //Verifico
        //var_dump(end($productions));


    }
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
                            <h5 class="card-header bg-dark text-white">
                                <?php echo $production->title; ?>
                            </h5>
                            <h6 class="card-header bg-dark text-warning"><?php
                            echo $production->type;
                            if ($production->type == 'Serie') {
                                echo " " . $production->seasons . " " . "Stagioni";
                            } else {
                                echo " " . "Durata:" . " " . $production->duration . "'";
                            }
                            ?></h6>
                            <div class="card-body">
                                <p class="card-text"><span class="fw-bold">Lingua:</span>
                                    <?php echo $production->language ?></p>
                                <p class="card-text"><span class="fw-bold">Voto:</span> <?php echo $production->vote ?>
                                    <!--Stampo anche l'istanza genre nell'istanza production-->
                                <p class="card-text"><span class="fw-bold">Genere:</span>
                                    <?php
                                    foreach ($production->genre->genres as $key => $gen) {
                                        echo $gen." ";
                                    } ?>
                                </p>
                                <p class="card-text"><span class="fw-bold"><?php if ($production->type == 'Movie') {
                                    echo "Sapevi che ha incassato " . $production->profits . " milioni?";
                                }
                                ; ?>
                                    </span>
                                </p>
                                <p class="card-text"><span class="fw-bold">Descrizone:</span>
                                    <?php echo $production->genre->description ?>
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