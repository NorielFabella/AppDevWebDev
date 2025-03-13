<?php

function fahrenheitToCelsius($farenheit)
{
    return $farenheit . "&degF " . " = " . ($farenheit - 32) * 5/9 . "&deg";
}

echo fahrenheitToCelsius(68);

echo "<br>";

$fahrenheitToCelsius = fn($farenheit) => $farenheit . "&degF " . " = " . ($farenheit - 32) * 5/9 . "&deg";

echo $fahrenheitToCelsius(68);


