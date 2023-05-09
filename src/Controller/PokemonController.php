<?php

declare(strict_types=1);

namespace App\Controller;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

class PokemonController
{
    public function index(Request $request, Response $response): Response
    {
        $response->getBody()->write(
            json_encode(
                [
                    ['name' => 'pikachu', 'pokemon_number' => 4],
                ]
            )
        );

        $response->withHeader('Content-Type', 'application/json');

        return $response;
    }
}
