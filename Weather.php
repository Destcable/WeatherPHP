<?php

class Weather
{
    private string $apiKey;
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function find(string $search, string $degreeType)
    {
        $client = new Client( apiKey: $this->apiKey);

        return $client->get(
            city: $search,
        );
    }
}