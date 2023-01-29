<?php

$alunos2021 = [
    'Ana', 
    'Bruno', 
    'Pedro', 
    'Daniela', 
    'José', 
];

$novosAlunos = [
    'Patricia', 
    'Nico', 
    'Kilderson', 
    'Daiane', 
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);

array_push($alunos2022, 'Bob', 'Alice', 'Charlie', 'Robson');
$alunos2022[] = 'Luiz';
array_unshift($alunos2022, 'Stephanie', 'Raphaela');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);