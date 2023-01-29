<?php

// r = inverte a sequencia, a = mantendo as chaves, k = ordem alfabetica
// (array_key_exists), verifica se existe a chave requisitada,(isset) verifica se a chave existe e seu valor é diferente de nulo, (in_array) verifica se o valor existe
//
$notas = [
    'Ana' =>10, 
    'Bruno' =>8, 
    'Pedro' =>null, 
    'Daniela' =>7, 
    'José' =>6
];

arsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Pedro fez a prova? ' . PHP_EOL;
var_dump(isset($notas['Pedro']));

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tirou 10? ' . PHP_EOL;
var_dump(array_search(10, $notas));