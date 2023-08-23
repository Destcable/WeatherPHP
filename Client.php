<?php

final class Client
{
    private string $apiKey;
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function get(string $city): string
    {
        $apiURL = 'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=' . $this->apiKey;
        $curl = curl_init($apiURL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        return curl_exec($curl);
    }
}