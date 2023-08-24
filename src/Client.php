<?php

namespace WeatherPHP;

final class Client
{
    private string $apiKey;
    private string $language;

    public function __construct(string $apiKey, string $language)
    {
        $this->apiKey = $apiKey;
        $this->language = $language;
    }

    public function get(string $city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&lang={$this->language}&units=metric";
        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}