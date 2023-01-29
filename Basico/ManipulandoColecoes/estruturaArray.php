<?php

$array = [
    1 => 'Um',
    2 => 'Dois', 
    3 => 'Tres'
];

foreach ($array as $numeral => $nomeNumero){
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
}
echo "Total: " . count($array) . PHP_EOL;