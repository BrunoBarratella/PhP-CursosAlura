<?php
$notas=[
        [
            'aluno' => 'Bruno', 
            'nota' => 10, 
        ],
        [
            'aluno' => 'Pedro', 
            'nota' => 7, 
        ],
        [
            'aluno' => 'José', 
            'nota' => 8, 
        ], 
    ];

    function ordenaNotas (array $nota1, array $nota2): int
    {
        if ($nota1['nota'] > $nota2['nota']){
            return -1;
        }

        if ($nota2['nota'] > $nota1['nota']){
            return 1;
        }
    return 0;
    }

    usort($notas, 'ordenaNotas');
    var_dump($notas);