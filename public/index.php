<?php

use App\Controller\PokemonController;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/pokemon', [PokemonController::class, 'index']);

$app->run();
