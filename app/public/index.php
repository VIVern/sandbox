<?php

require_once '../vendor/autoload.php';

ini_set('display_errors', 1);

$test = new App\controllers\TmdbMovies();

var_dump($test->getMovies());