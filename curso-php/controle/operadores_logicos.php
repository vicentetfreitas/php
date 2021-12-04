<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p  class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // false

echo "<p  class='divisao'>Tabela Verdade 'AND' - (E)</p> <hr>";
echo "<p>&&</p>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
echo "<p>and</p>";
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);
echo '<br>';
echo '<br>';
echo "<p  class='divisao'>Tabela Verdade 'OR' - (OU)</p> <hr>";
echo "<p>||</p>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);
echo "<p>OR</p>";
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);
echo '<br>';
echo '<br>';
echo "<p  class='divisao'>Tabela Verdade 'XOR' - (OU Exclusivo)</p> <hr>";
echo "<p>XOR</p>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);
echo "<p>OR</p>";
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p>";
$idade = 65;
$sexo = 'F';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar <br>";

if ($idade >= 60 && $sexo === 'F') {
  echo "Pode se aposentar -> $sexo";
} else if ($idade >= 65 && $sexo === 'M') {
  echo "Pode se aposentar -> $sexo";
} else {
  echo 'Vai ter que trabalhar mais um pouco...';
}
