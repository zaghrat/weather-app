<?php

use App\service\WeatherService;


require_once "../vendor/autoload.php";

    //Get User IP Address
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    // Fetch Weather data
    $weatherService = new WeatherService();
    $weatherData = $weatherService->fetchWeatherByIpAddress($ipAddress);

    require_once '../src/views/weather.php';

