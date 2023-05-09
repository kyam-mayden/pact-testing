<?php

use App\Controller\PokemonController;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', [PokemonController::class, 'index']);

$app->run();
