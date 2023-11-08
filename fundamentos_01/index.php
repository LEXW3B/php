<?php 
// Arquivo index responsável pela inicialização do sistema
declare(strict_types=1);
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';
$url = 'http://u';

//chamando as constantes
/*
echo '<p>SITE_NOME</p>';
echo SITE_DESCRICAO;
echo '<p>URL_PRODUCAO</p>';
echo URL_DESENVOLVIMENTO;
*/


// validar url
// var_dump(validarUrl($url));

// echo '<hr>';
// validar url com filtro
// var_dump(validarUrlComFiltro($url));
/*
if (validarUrlComFiltro('https://teste.com')) {
  echo 'URL válida';
} else {
  echo 'URL inválida';
}
*/

//validar email
//var_dump(validarEmail('teste@gmail.com'));
/*
if (validarEmail('teste@gmail.com')) {
  echo 'E-mail válido';
} else {
  echo 'E-mail inválido';
}
*/

//contar o tempo
// echo contarTempo('2022-09-30 06:15:15');

// DATA E HORA
/*
$data = date('d/m/Y - H:i:s');
echo $data;
*/

//FORMATAÇÃO DE VALORES
/*
echo formatarValor(5000);
echo '<hr>';

echo formatarNumero(10000020);
*/

// Operador ternário em php
/*
$valor = 56;
if ($valor) {
  echo $valor;
} else {
  echo 0;
}
echo ($valor ? $valor : 0);
// ou
echo ($valor ?: 0);
*/


//$texto = '<h1>texto</h1> <p>para</p> resumir';
//$texto = strip_tags($texto); // função strip_tags() remove as tags html e php de uma string


//echo $total = mb_strlen(trim($texto)); // conta a quantidade de caracteres a função mb_strlen() e a função trim() remove os espaços em branco
//echo '<hr>';
//echo $resumo = mb_substr($texto, 2, 15); // função mb_substr() retorna uma parte de uma string
//echo '<hr>';
//echo $ocorrencia = mb_strrpos($texto, 'e'); // função mb_strrpos() retorna a posição da última ocorrência de uma string

// Principais tipos de dados no php
// $string = 'tipo texto';
// $int = 10;
// $float = 9.99;
// $bool = false;
// $nulo = null;

// Serve para fazer debugg de uma váriavel
// var_dump($string);
// echo '<hr>';


// Chamar as funções
echo saudacao();
// echo '<hr>';
// echo resumirTexto($texto, 50);
