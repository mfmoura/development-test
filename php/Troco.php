<?php

/**
 * Class Troco
 * Classe para calcular a quantidade de notas necessárias para um determinado valor em Reais.
 * Suporta centavos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     *
     * @param $reais Valor em reais, podendo conter centavos.
     * @return array Quantidade de notas, indexada pelo seu valor.
     */

    // Quantidade de notas a retornar
    private $qtdeNotas = [
          '100' => 0,
           '50' => 0,
           '20' => 0,
           '10' => 0,
            '5' => 0,
            '2' => 0,
            '1' => 0,
          '0.5' => 0,
         '0.25' => 0,
          '0.1' => 0,
         '0.01' => 0,
        ];

    // Valores das notas, em uma array contendo apenas números para não causar erros no PHP fazendo calculos com strings
    private $notas = array(100, 50, 20, 10, 5, 2, 1, 0.5, 0.25, 0.1, 0.01);

    // Quantidade de notas disponíveis
    public $notasDisponiveis = [
           '100' => 0,
           '50' => 0,
           '20' => 0,
           '10' => 0,
            '5' => 0,
            '2' => 0,
            '1' => 0,
          '0.5' => 0,
         '0.25' => 0,
          '0.1' => 0,
         '0.01' => 0,
        ];

    // Atributo para pegar o valor que não tem em notas disponível, caso haja
    private $resto;

    // Calcula a menor quantidade de notas a serem entregues dentro da disponibilidade do objeto
    public function getQtdeNotas($reais)
    {

        // TODO: Enquanto não tiver dado todo o troco e ainda ter dinheiro em caixa com a maior nota disponível podendo pagar o que sobrou
        //while ($reais > 0 && array_sum($this->notasDisponiveis) > 0) {

            foreach ($this->notas as $nota) {
                
                while ($nota <= $reais && $this->notasDisponiveis[(string)$nota] > 0) {

                    echo $reais = $reais - $nota;
                    echo PHP_EOL;
                    $this->qtdeNotas[(string)$nota]++;
                    $this->notasDisponiveis[(string)$nota]--;

                }
            }

        //}

        $this->resto = $reais;

        return $this->qtdeNotas;
    }

    // Retorna o valor que não pode ser pago
    public function retornaResto(){
        return $this->resto;
    }
}
