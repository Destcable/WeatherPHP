<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Weather.php';
require_once 'Client.php';

echo '<pre>';

$weather = new Weather( apiKey: '10dfdcf61d993c75489cf90e66c9b223' );

var_dump($weather->find(
    search: 'San Francisco',
));
