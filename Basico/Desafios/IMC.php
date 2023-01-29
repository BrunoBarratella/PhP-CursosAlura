<?php

$altura = 1.70;
$peso = 70;

$IMC = $peso/($altura**2);

if ($IMC < 18.5){
echo "Você está Abaixo do Peso";
} else if($IMC>=18.5 && $IMC<= 24.99){
    echo "Seu peso está normal";
} else if($IMC >=25 && $IMC<=29.99){
    echo "Você está com sobrepeso";
} else if($IMC >=30){
        echo "Você está Obeso";
}