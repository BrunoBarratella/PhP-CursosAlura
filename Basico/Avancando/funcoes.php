<?php


// VV É uma Função, Ela executa tudo dentro dela propia e retorna alguma coisa
function sacar(array $conta, float $valorASacar):array
{
    if ($valorASacar>$conta['saldo']){
        exibeMensagem(mensagem:"Você não pode sacar");
    } else{
        $conta['saldo'] -= $valorASacar;
    }
        return $conta;
}

// VV É uma SubRotina, ela executa tudo dentro dela propia, não devolve nenhum valor
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar):array
{
    if ($valorADepositar>0){
        exibeMensagem($conta['saldo'] += $valorADepositar);
    } else{
        exibeMensagem("O valor de deposito não pode ser negativo");
    }
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}