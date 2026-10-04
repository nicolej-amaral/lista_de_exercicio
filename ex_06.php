<?php

function converterTemperatura($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;
    
    return [
        'fahrenheit' => $fahrenheit,
        'kelvin' => $kelvin
    ];
}

$celsius = 32;
$resultado = converterTemperatura($celsius);

echo "Temperatura em: ";
echo "Celsius: " . $celsius . "°C <br>";
echo "Fahrenheit: " . $resultado['fahrenheit'] . "°F <br>";
echo "Kelvin: " . $resultado['kelvin'] . "K <br>";