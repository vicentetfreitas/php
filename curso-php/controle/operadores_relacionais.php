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

echo "<p>Spaceship</p><hr>";
var_dump(500 <=> 5);
echo "<br>";
var_dump(50 <=> 50);
echo "<br>";
var_dump(5 <=> 500);
echo "<br>";

echo "<p>Valores podem ser V ou F</p><hr>";

var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");



?>
<style>
  p {
    margin-bottom: 0px;
  }

  hr {
    margin-top: 0px;
  }
</style>