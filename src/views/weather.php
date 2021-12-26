<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ahmed Zaghrat">
    <title>My Simple Weather App</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>

<body>
    <section class="weather-data">
        <h1> <?php echo $weatherData->location->name?> </h1>
        <h1> <?php echo $weatherData->location->country?> </h1>
        <img class="icon" src="<?php echo $weatherData->current->condition->icon ?>" />
        <span class="condition-text">
            <?php echo $weatherData->current->condition->text?>
        </span>
        <span class="temp">
            <strong class="bold">Temp: </strong>
            <?php echo round($weatherData->current->temp_c) ?>°
        </span>
        <span class="feels-like">
             <strong class="bold">Feels like: </strong>
            <?php echo round($weatherData->current->feelslike_c) ?>°
        </span>

        <span class="wind">
             <strong class="bold">Wind speed: </strong>
            <?php echo $weatherData->current->vis_km ?> km/h
        </span>
    </section>
    <footer>
        <a href="https://www.weatherapi.com/" title="Free Weather API">
            <img src='//cdn.weatherapi.com/v4/images/weatherapi_logo.png' alt="Weather data by WeatherAPI.com" border="0">
        </a>
    </footer>
</body>

</html>