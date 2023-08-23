<?php

require_once 'Weather.php';
require_once 'Client.php';

$weather = new Weather(
    apiKey: 'key'
);

var_dump($weather->find(
    search: 'Moscow',
    degreeType: 'F'
));
