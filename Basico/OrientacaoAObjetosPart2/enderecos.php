<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Bariri', 'Vila São José', 'Rua Piauí', '284');
$outroEndereco = new Endereco('Petrópolis', 'Centro', 'Minha Rua', '50');



echo $umEndereco . PHP_EOL;
echo $outroEndereco;