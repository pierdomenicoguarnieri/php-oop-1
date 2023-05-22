<?php

require_once __DIR__ . "/models/Movie.php";

$batman = new Movie('Batman', 130, new MovieInfos(['Action', 'Fantasy', 'Avventura'], false));
$titanic = new Movie('Titanic', 200, new MovieInfos('Romantico', true));

var_dump($batman);
var_dump($titanic);