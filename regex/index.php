<?php

declare(strict_types=1);
include_once 'Helpers.php';
require_once 'sistema/config.php';


$cpf = '004.348.491-38';
var_dump(validarCpf($cpf));
// echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf);
