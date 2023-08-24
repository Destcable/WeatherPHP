<?php

namespace WeatherPHP;

final class Client
{
    private string $apiKey;
    
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function get(string $city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric";
        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}