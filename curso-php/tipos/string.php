<div class="titulo">String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//Concatenação
echo "Nós também" . ' somos';
echo '<br>';
echo 'Sou', "uma", 'string que estar', "sendo concatenada";
echo "'Teste'" . '"Teste"' . '\'Teste\'' . "\"Teste\"";

print("<br>Tenho a mesma função do echo.");
print "<br>Tenho a mesma função do echo.";

//Funções de strings
echo '<br>' . strtoupper('maximinizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen('Quantas letras?', 'utf-8');
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');
