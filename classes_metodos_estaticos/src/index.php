<?php

require_once __DIR__.'/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use sistema\nucleo\Controlador;
use sistema\nucleo\Helpers;
use sistema\nucleo\Mensagem;

// declare(strict_types=1);
require_once './sistema/config.php';
include_once './sistema/nucleo/Helpers.php';
include './sistema/config.php';
include './sistema/nucleo/Controlador.php';

echo (new Mensagem())->erro('class Mensagem - texto de alerta!!!');
echo '<hr>';

// criando a instancia da classe Helpers
$helpers = new Helpers();
/*
echo $helpers->saudacao('Vai se fuder seu merda!!!');
echo '<hr>';

echo $helpers->limparNumero('1234567890');
echo '<hr>';
*/

// ou simplismente
$saudacao = 'Olá mundo!!!';
echo Helpers::saudacao($saudacao);
echo '<hr>';

$numero = '!!@#$%12DASGA345graegaer67890gdsa';
echo Helpers::limparNumero($numero);
echo '<hr>';

// class Controlador
$controlador = new Controlador();
echo '<br>';
var_dump($controlador);
echo '<hr>';
