<?php

namespace WeatherPHP;

use DateTime;

class Weather
{
    public string $language = 'en';

    private string $apiKey;
    private array $data;
    
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function find(string $city): array
    {
        $this->data = Query::get("https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&lang={$this->language}&units=metric");

        return $this->data;
    }

    public function getDaysTemperature(string $city, int $days = 5): array
    {
        $currentDate = new DateTime();
        $currentDate->modify("+{$days} days");
        $newDate = $currentDate->format('Y-m-d');

        $this->data = Query::get("http://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$this->apiKey}&lang={$this->language}&units=metric");
        
        $dataTemp = [];

        for ($i=0; $i < count($this->data['list']); $i++) { 

            if ($this->data['list'][$i]['dt_txt'] <= $newDate ) { 
                $dataTemp []= [
                    'date' => $this->data['list'][$i]['dt_txt'],
                    'temperature' => $this->data['list'][$i]['main']['temp'],
                    'wind_speed' => $this->data['list'][$i]['wind']['speed'],
                    'weather_main' => $this->data['list'][$i]['weather'][0]['main'],
                    'weather_description' => $this->data['list'][$i]['weather'][0]['description'],
                ];
            }
        
        }

        return $dataTemp;
    }

    public function getTemperature(): float
    {
        return $this->data['main']['temp'];
    }
    
    public function analyzeEvent(Event $event)
    { 

    }
}