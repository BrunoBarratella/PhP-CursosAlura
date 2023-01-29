<?php

// (array_diff_key) Vê as diferenças entre um array e outro pela chave, (array_diff_assoc) Vê as diferenças entre um array e outro pela chave e pelo valor
$notasBimestres1 = [
    'Ana' =>10, 
    'Bruno' =>8, 
    'Pedro' =>5, 
    'Daniela' =>7, 
    'José' =>6
];

$notasBimestres2 = [
    'Ana' =>10, 
    'Bruno' =>8,  
    'Daniela' =>7, 
    'José' =>6
];

$alunosFaltantes = array_diff_key($notasBimestres1, $notasBimestres2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($notasAlunos, $nomesAlunos));

