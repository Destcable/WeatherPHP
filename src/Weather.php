<?php

namespace WeatherPHP;

class Weather
{
    public string $lanugage = 'en';

    private string $apiKey;
    private array $data;
    
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function find(string $search): array
    {
        $client = new Client($this->apiKey, $this->lanugage);

        $this->data = $client->get($search);

        return $this->data;
    }

    public function getTemperature(): float
    {
        return $this->data['main']['temp'];
    }
}