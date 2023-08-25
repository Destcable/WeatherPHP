# WeatherPHP

## Usage

To work with the library, you need to register on the https://openweathermap.org 
platform, after which you will receive an authorization key (it is free), and insert 
this key during initialization as shown in the example.

```php
use WeatherPHP\Weather;

$weather = new Weather( apiKey: 'you_api_key');

$weather->lanugage = 'ru';

$weather->find(
    search: 'San Francisco'
);

$weather->getTemperature();
```