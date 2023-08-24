<?php

namespace WeatherPHP;

class Weather
{
    private string $apiKey;
    
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function find(string $search)
    {
        $client = new Client(apiKey: $this->apiKey);

        return $client->get(
            $search,
        );
    }
}
