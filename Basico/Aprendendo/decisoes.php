<?php
$idade = 17;
$NumeroDePessoas = 2;

echo "Você só pode entrar se for maior de 18 anos ou ";
echo "a partir de 16 anos, porém acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $NumeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";









