<?php

// Arquivo index responsável pela inicialização do sistema
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';

echo urlAmigavel("Adão \"Negro\" - '2022' ").'<hr>';
echo urlAmigavel("Avatar 2: O caminho da Água").'<hr>';
echo urlAmigavel("Não! Não olhe!").'<hr>';
echo urlAmigavel("Sonic 2 - O Filme").'<hr>';
echo urlAmigavel("NOVA SÉRIE DA DISNEY+!").'<hr>';
echo urlAmigavel("100 Melhores filmes").'<hr>';
echo urlAmigavel("teste!@###$%6''%'',*.:/?\|,").'<hr>';

// echo dataAtual();

//servidor
/*
var_dump(localhost());
echo url('admin');
*/

// Usando arrays
/*
$meses = array();
//ou
$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'];
foreach ($meses as $chave => $valor) {
  echo $chave.' - '.$valor.'<br>';
}

var_dump($meses);


echo $_SERVER['SCRIPT_FILENAME'];
echo '<hr>';
var_dump($_SERVER);
*/
