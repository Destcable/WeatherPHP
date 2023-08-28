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

Planning an event and up to 5 days, if the event is large for 5 days (an error will occur, because at the moment working with the scheduler for more than 5 days is not provided).

```php
use WeatherPHP\Weather;

$event = new Event('Playing football with friends', 'Moscow', '2023-08-30 12:00', 'Sunny');
```
