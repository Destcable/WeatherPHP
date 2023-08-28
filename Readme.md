# WeatherPHP

## Usage

To work with the library, you need to register on the https://openweathermap.org 
platform, after which you will receive an authorization key (it is free), and insert 
this key during initialization as shown in the example.

```php
use WeatherPHP\Weather;

$weather = new Weather( apiKey: 'you_api_key');

$weather->language = 'ru';

$weather->find(
    city: 'San Francisco'
);

$weather->getTemperature();
```

Getting the weather in time difference, the maximum amount in days that can be obtained +5 from the current date.

```php
use WeatherPHP\Weather;

$weather = new Weather( apiKey: 'you_api_key');

$weather->getDaysTemperature(
    city: 'Москва', 
    days: 5
);
```