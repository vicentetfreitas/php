<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';
echo $title;

$num1 = 10;
echo '<br>' . $num1;
$num1 = $num1 - 3;
echo '<br>' . $num1;
$num1 = $num1 + 1.5;
echo '<br>' . $num1;
$num1--; //Decrementar um unidade
echo '<br>' . $num1;
$num1++; // Acrescenta um unidade
echo '<br>' . $num1;
$num1 = 20;
echo '<br>' . $num1;
$num1 -= 5;
echo '<br>' . $num1;
$num1 += 6;
echo '<br>' . $num1;
$num1 *= 10;
echo '<br>' . $num1;
$num1 /= 10;
echo '<br>' . $num1;
$num1 %= 10;
echo '<br>' . $num1;
$num1 **= 10;
echo '<br>' . $num1;

$texto = 'Esse é um texto qualquer';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

// $variavelInexistente = 'valor existente';
echo '<br>'.$variavelInexistente;
$valor = $variavelInexistente ?? 'Valor default';
echo '<br>'.$valor;