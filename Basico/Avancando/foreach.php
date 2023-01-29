<?php

$contasCorrentes=[
    50388166819=> [
        'titular'=> 'Bruno',
        'saldo'=> 1000
    ], 
    45789623189=> [
        'titular'=> 'Adriele', 
        'saldo'=> 5000
    ], 
    98765432141=> [
        'titular' => 'Roberto', 
        'saldo' =>700
    ]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
}