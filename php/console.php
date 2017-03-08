#!/usr/bin/env php
<?php

// Utilize este arquivo para testar rapidamente a classe pela linha de comando
// executar assim: php console.php 112.10

require_once 'Troco.php';

$reais = $argv[1] ?: 0;

$troco = new Troco();

$troco->notasDisponiveis['100'] = 0;
$troco->notasDisponiveis['50'] = 0;
$troco->notasDisponiveis['25'] = 0;
$troco->notasDisponiveis['10'] = 0;
$troco->notasDisponiveis['5'] = 0;
$troco->notasDisponiveis['2'] = 0;
$troco->notasDisponiveis['1'] = 2;
$troco->notasDisponiveis['0.5'] = 5;
$troco->notasDisponiveis['0.25'] = 25;
$troco->notasDisponiveis['0.1'] = 50;
$troco->notasDisponiveis['0,01'] = 100;

$notas = $troco->getQtdeNotas($reais);
$resto = $troco->retornaResto();

print_r($notas);
print_r($resto);
