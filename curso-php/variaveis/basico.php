<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
// variaveis são case sensitives
echo '<br>';
echo isset($soma); // verifica se a variavel estar setada
echo '<br>';
unset($soma); // variavel não setada
var_dump($soma);
echo ($soma);

$variavel = "Sou uma string";
echo '<br>' . $variavel;
