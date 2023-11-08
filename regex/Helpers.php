<?php


/**
 * @param string validação de $cpf se tiver 11 digitos e se não tiver numeros repetidos 
 * 
 * @return bool
 */
function validarCpf(string $cpf): bool
{
  $cpf = limparNumero($cpf);

  if (mb_strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
    return false;
  }

  for ($t = 9; $t < 11; $t++)
  {
    for ($d = 0, $c = 0; $c < $t; $c++)
    {
      $d += $cpf[$c] * (($t + 1) - $c);
    }
    $d = ((10 * $d) % 11) % 10;
    if ($cpf[$c] != $d)
    {
      return false;
    }
  }
  return true;
}

/**
 * @param string Limpar caracteres que não sejam numeros
 * 
 * @return string
 */
function limparNumero(string $numero): string
{
  return preg_replace('/[^0-9]/', '', $numero);
}
