<?php

namespace App\service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use stdClass;

class WeatherService
{

    private const API_KEY='f56380a486644a019fb170352212412';

    /**
     * @throws GuzzleException
     * @throws JsonException
     */
    public function fetchWeatherByIpAddress(string $ipAddress): ?stdClass
    {
        $url = sprintf('https://api.weatherapi.com/v1/current.json?key=%s&q=%s&aqi=no', self::API_KEY, $ipAddress);
        $client = new Client();
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getBody(), false, 512, JSON_THROW_ON_ERROR);
        }
        return null;

    }
}