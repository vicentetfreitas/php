<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); //true
echo '<br>';
var_dump(1 > 1); // false
echo '<br>';
var_dump(1 >= 1); //false
echo '<br>';
var_dump(4 < 23); // true
echo '<br>';
var_dump(1 <= 7); // true
echo '<br>';
var_dump(1 != 1); //false
echo '<br>';
var_dump(1 <> 1); //false
echo '<br>';

var_dump(111 == '111'); //true
echo '<br>';
var_dump(111 === '111'); //false
echo '<br>';
var_dump(111 != '111'); //true
echo '<br>';
var_dump(111 !== '111'); //true

echo "<br><p>Relacionais no If/Else</p><hr>";
$idade = 25;

if ($idade < 18) {
  echo "Menor de idade = $idade anos<br>";
} elseif ($idade <= 65) {
  echo "Adulto = $idade anos<br>";
} else {
  echo "Terceira idade = $idade anos";
}
