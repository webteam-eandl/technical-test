<?php


namespace ApiClient;

use GuzzleHttp\Client;

class GetApiFactory
{
    public function createGetApi(): GetApi
    {
        $client = new Client([
            'exceptions' => false,
        ]);
        return new GetApi($client);
    }
}
