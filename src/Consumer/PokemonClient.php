<?php

declare(strict_types=1);

namespace App\Consumer;

use GuzzleHttp\Client;

class PokemonClient
{
    private Client $client;

    public function __construct($baseUri)
    {
        $this->client = new Client(
            [
                'base_uri' => $baseUri,
            ]
        );
    }

    public function getAll(): array
    {
        $response = $this->client->get('/pokemon');

        $data = json_decode((string) $response->getBody(), true);

        return $data;

    }
}
