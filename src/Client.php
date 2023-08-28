<?php

namespace WeatherPHP;

final class Client
{
    public static function get(string $url)
    {
        $response = file_get_contents($url);

        return json_decode($response, true);
    }
}