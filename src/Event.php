<?php

namespace WeatherPHP;

use Exception;

class Event
{
    private string $name;
    private string $city;
    private string $dateTime;
    private string $expectedWeather;

    private array $weatherConditions = [ 
        'Clear' => 'Ясно', 
        'Cloudy' => 'Облачно',
        'Sunny' => 'Солнечно',
        'Overcast' => 'Пасмурно',
        'Rain' => 'Дождь',
        'Snow' => 'Снег',
        'Thunderstorm' => 'Гроза',
        'Drizzle' => 'Морось',
        'Downpour' => 'Ливень',
        'Snowfall' => 'Снегопад',
        'Fog' => 'Туман',
        'Hail' => 'Град',
        'Windy' => 'Ветрено',
        'Dust Storm' => 'Пыльная буря',
        'Heatwave' => 'Жара',
        'Frost' => 'Мороз',
        'Frostbite' => 'Изморозь',
        'Mixed Precipitation' => 'Смешанные осадки',
        'Gusty Wind' => 'Порывистый ветер',
        'Freezing Rain' => 'Гололед',
        'Frosty Morning' => 'Морозное утро',
    ];


    public function __construct(string $name, string $city, string $date, string $expectedWeather)
    {
        $this->name = $name;
        $this->city = $city;
        $this->dateTime = $date;
    
        $this->setExpectedWeather($expectedWeather, $this->weatherConditions);

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getDateTime(): string
    {
        return $this->dateTime;
    }

    public function getExpectedWeather(): string
    {
        return $this->expectedWeather;
    }

    private function setExpectedWeather(string $expectedWeather, array $weatherConditions) {
        $lowerCaseInput = MBString::string_to_lower($expectedWeather);
        foreach ($weatherConditions as $key => $value) {
            if (strtolower($key) == $lowerCaseInput) { 
                return $this->expectedWeather = $expectedWeather;       
            }

            if (MBString::string_to_lower($value) == $lowerCaseInput) { 
                return $this->expectedWeather = $expectedWeather;       
            }
        }

        throw new Exception("Недопустимое погодное условие");
    }
}