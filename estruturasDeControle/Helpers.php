<?php


/**
 * Função responsável por uma saudação de acordo com a hora do dia
 * 
 * @return string - saudação
 */
function saudacao(): string
{
  $hora = date('H');
  // $saudacao = '';


  //Estrutura de controle if && else
/*
  if ($hora >= 0 && $hora <= 5) {
    $saudacao = 'boa madrugada';
  } elseif ($hora >= 6 && $hora <= 12) {
    $saudacao = 'bom dia';
  } elseif ($hora >= 13 && $hora <= 18) {
    $saudacao = 'boa tarde';
  } else {
    $saudacao = 'boa noite';
  }
*/

  //Estrutura de controle switch
/*
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
*/

  //Estrutura de controle match
  $saudacao = match ($hora) {
    '1', '2', '3', '4', '5' => 'boa madrugada',
    '6', '7', '8', '9', '10', '11', '12' => 'bom dia',
    '13', '14', '15', '16', '17', '18' => 'boa tarde',
    default => 'boa noite'
  };

  return $saudacao;
}