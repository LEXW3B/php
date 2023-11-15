<?php

require_once __DIR__.'/../vendor/autoload.php';

use sistema\nucleo\Helpers;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo Helpers::saudacao('Olá, mundo!!!');
echo '<hr>';
