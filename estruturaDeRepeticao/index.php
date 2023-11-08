<?php

declare(strict_types=1);
require_once 'sistema/config.php';
include_once 'Helpers.php';


$numero = 5;

// Estrutura de repetição while
while ($numero <= 10) {
  echo $numero++ . '<br>';
}


// Estrutura de repetição for
for($i = 0; $i <= 10; $i++) {
  echo $i . '<br>';
}
echo '<hr>';
for($i = 1; $i <= 10; $i++) {
  // echo ($i % 2 == 0 ? $i.' - par' : $i.' - ímpar') . '<hr>';
  echo $i.' X '.$numero.' = '.$i*$numero .'<br>';
}

// Estrutura de repetição for válidação de cpf

$cpf = '12345678910';

for($t = 9; $t <= 11; $t++) {
  for($d = 0, $c = 0; $c < $t; $c++) {
    $d += $cpf[$c] * (($t + 1) - $c);
  }
  $d = ((10 * $d) % 11) % 10;
  if($cpf[$c] != $d) {
    echo 'CPF inválido';
  }
  else {
    echo 'CPF válido';
  }
}

