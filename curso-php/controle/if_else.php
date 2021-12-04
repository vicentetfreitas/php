<div class="titulo">If Else</div>

<?php

if (true) {
  echo "Serei impresso?<br>";
  echo "Serei impresso novamente?<br>";
}

if (false) {
  echo "Verdadeiro - Parte A<br>";
  echo "Verdadeiro - Parte B<br>";
} else {
  echo "Falso - Parte A<br>";
  echo "Falso - Parte B<br>";
}

if (false) {
  echo "Passo A<br>";
} elseif (true) {
  echo "Passo B<br>";
} elseif (true) {
  echo "Passo C<br><br>";
} else if (true) {
  echo "Passo D<br>";
} else if (true) {
  echo "Passo E";
} else {
  echo "Último Passo";
}

echo "Fim<br>";
