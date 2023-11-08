<?php



/**
 * Função responsável por validar uma url
 * 
 * @param string $url - url a ser validada
 * @return bool - retorna true se a url for válida
 */
function validarUrl(string $url): bool
{
  if (mb_strlen(trim($url)) < 10) {
    return false;
  }
  if (!str_contains($url, '.')) {
    return false;
  }
  if (str_contains($url, 'http://') or str_contains($url, 'https://')) {
    return true;
  }
}

/**
 * Função responsável por validar uma url
 * 
 * @param string $url - url a ser validada
 * @return bool - retorna true se a url for válida
 */
function validarUrlComFiltro(string $url): bool
{
  return filter_var($url, FILTER_VALIDATE_URL);
}

/**
 * Função responsável por validar um email
 * 
 * @param string $email - email a ser validado
 * @return bool - retorna true se o email for válido
 */
function validarEmail(string $email): bool
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Função responsável por contar o tempo
 * 
 * @param string $data - data a ser contada
 * @return string - tempo contado
 */
function contarTempo(string $data)
{
  $agora = strtotime(date('Y-m-d H:i:s'));
  $tempo = strtotime($data);
  $diferenca = $agora - $tempo;

  $segundos = $diferenca;
  $minutos = round($diferenca / 60);
  $horas = round($diferenca / 3600);
  $dias = round($diferenca / 86400);
  $semanas = round($diferenca / 604800);
  $meses = round($diferenca / 2419200);
  $anos = round($diferenca / 29030400);

  // echo '<hr>';
  // var_dump($minutos);
  if ($segundos <= 60) {
    return 'agora';
  } elseif($minutos <= 60) {
    return $minutos == 1 ? 'há 1 minuto' : 'há '.$minutos.' minutos';
  } elseif ($horas <= 24) {
    return $horas == 1 ? 'há 1 hora' : 'há '.$horas.' horas';
  } elseif ($dias <= 7) {
    return $dias == 1 ? 'há 1 dia' : 'há '.$dias.' dias';
  } elseif ($semanas <= 4) {
    return $semanas == 1 ? 'há 1 semana' : 'há '.$semanas.' semanas';
  } elseif ($meses <= 12) {
    return $meses == 1 ? 'há 1 mês' : 'há '.$meses.' meses';
  } else {
    return $anos == 1 ? 'há 1 ano' : 'há '.$anos.' anos';
  }
}

/**
 * Função responsável por formatar um valor em moeda
 * 
 * @param float $valor - valor a ser formatado
 * @return string - valor formatado
 */
function formatarValor(float $valor): string
{
  return 'R$ '.number_format($valor, 2, ',', '.');
}

/**
 * Função responsável por formatar um número
 * 
 * @param float $numero - número a ser formatado
 * @return string - número formatado
 */
function formatarNumero(float $numero = null): string
{
  return number_format($numero ?: 0, 0, '.', '.');
}

/**
 * Função responsável por retornar a saudação de acordo com a hora do dia
 */
function saudacao(): string
{
  $hora = 20;//date('H');
  // $saudacao = '';

  // if ($hora >= 0 && $hora <= 5) {
  //   $saudacao = 'boa madrugada';
  // } elseif ($hora >= 6 && $hora <= 12) {
  //   $saudacao = 'bom dia';
  // } elseif ($hora >= 13 && $hora <= 18) {
  //   $saudacao = 'boa tarde';
  // } else {
  //   $saudacao = 'boa noite';
  // }

  //Estrutura switch
  switch ($hora) {
    case ($hora >= 0 && $hora <= 5):
      $saudacao = 'boa madrugada';
      break;
    case ($hora >= 6 && $hora <= 12):
      $saudacao = 'bom dia';
      break;
    case ($hora >= 13 && $hora <= 18):
      $saudacao = 'boa tarde';
      break;
    default:
      $saudacao = 'boa noite';
      break;
  }

  return $saudacao;
}

/**
 * Função responsável por resumir um texto
 * 
 * @param string $texto - texto a ser resumido
 * @param int $limite - limite de caracteres a ser exibido
 * @param string $continue - texto a ser exibido após o texto resumido
 * @return string - texto resumido
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
  $textoLimpo = trim(strip_tags($texto));
  if (mb_strlen($textoLimpo) <= $limite) {
    return $textoLimpo;
  }

  $resumirTexto = mb_substr($textoLimpo, 0, mb_strpos(mb_substr($textoLimpo, 0, $limite), ' '));
  return $resumirTexto.$continue;
}
