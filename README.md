# TROCO

## Introdução

Este projeto é um teste simples para avaliar programadores.
Trata-se de um problema simples, para ser resolvido no máximo em 1 hora.

O programador poderá escolher **UMA** das tres linguagens para resolver o problema, **php**, **node** ou **ruby**

## Os seguintes critérios serão avaliados

1. Clareza do código
2. Comentários relevantes
3. Método protegido para auxiliar o cálculo, tirando a carga do método **getQtdeNotas**
4. Retorno correto da quantidade de notas de acordo com o valor passado
5. Código identado e formatado de acordo com os padrões de boas práticas de cada linguagem

> Ao concluir, publicar o código na sua conta do *GitHub* e enviar um email com o link do repositório para ser avaliado.

## Pontos extras

Os critérios acima são os requisitos mínimos. Mas para os candidatos que pretendem se destacar, segue algumas sugestões.

1. Adicionar no construtor da classe, uma array opcional contendo a quantidade de notas disponíveis para cada cédula.
O troco deve ser retornado respeitando este limite de notas imposto. Caso não tenha cédulas suficientes para retornar o
troco, gerar uma exceção.
2. Utilização do GIT. Micro commits, organização do código e clareza dos comentários em cada commit
3. Resolver o problema em mais de uma linguagem demonstrando o conhecimento ou capacidade de rápida aprendizagem

## Exemplos

Todos os exemplos abaixo foram feitos usando linha de comando unix

### PHP

A classe **Troco** no arquivo **Troco.php**, possui apenas um método, **getQtdeNotas**, que retorna a um array contendo
a quantidade de notas necessárias de cada cédula, para completar o valor em reais passado no parâmetro.

#### Exemplo de resposta esperada ao executar console.php:

    $ php php/console.php 112.1
    Array
    (
        [100] => 1
        [50] => 0
        [20] => 0
        [10] => 1
        [5] => 0
        [2] => 1
        [1] => 0
        [0.5] => 0
        [0.25] => 0
        [0.1] => 1
        [0.01] => 0
    )

### Node

A classe **Troco** no arquivo **Troco.js**, possui apenas um método, **getQtdeNotas**, que retorna a um array contendo
a quantidade de notas necessárias de cada cédula, para completar o valor em reais passado no parâmetro.

#### Exemplo de resposta esperada ao executar console.php:

    $ node node/console.js 112.1
    { '1': 0,
      '2': 1,
      '5': 0,
      '10': 1,
      '20': 0,
      '50': 0,
      '100': 1,
      '0.5': 0,
      '0.25': 0,
      '0.1': 1,
      '0.01': 0 }

### Ruby

A classe **Troco** no arquivo **troco.rb**, possui apenas um método, **get_qtd_notas**, que retorna a um array contendo
a quantidade de notas necessárias de cada cédula, para completar o valor em reais passado no parâmetro.

#### Exemplo de resposta esperada ao executar console.php:

    $ ruby ruby/console.rb 112.1
    {:"100"=>1, :"50"=>0, :"20"=>0, :"10"=>1, :"5"=>0, :"2"=>1, :"1"=>0, :"0.5"=>0, :"0.25"=>0, :"0.1"=>1, :"0.01"=>0}