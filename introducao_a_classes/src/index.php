<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use sistema\nucleo\Mensagem;

// declare(strict_types=1);
require_once 'sistema/config.php';
include_once 'Helpers.php';
include './sistema/nucleo/Mensagem.php';

// $msg = new Mensagem();
// echo $msg->renderiza();

// echo $msg->sucesso('mensagem de sucesso 02')->renderiza();
// echo $msg->erro('mensagem de erro 02')->renderiza();
// echo $msg->$texto = 'texto de teste';

// echo (new Mensagem())->erro('new menseger of error')->renderiza();

echo (new Mensagem())->erro('texto de alerta');
echo '<hr>';
