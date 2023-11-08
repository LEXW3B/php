<?php


/**
 * Função para validar uma URL
 * 
 * @param string $url
 * @return string
 */
function urlAmigavel(string $string): string
{
  $mapa['a'] = 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝþB@#$%&*()_+=-§¹²³£¢¬§~^´`{}[]?/°ªº°°°|;:.,><';

  $mapa['b'] = 'aaaaaaaceeeeiiiidnooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuu                                              ';

  $slug = strtr(utf8_decode($string), utf8_decode($mapa['a']), $mapa['b']);

  $slug = strip_tags(trim($slug));
  $slug = str_replace(' ', '-', $slug);
  $slug = str_replace(array('-----', '----', '---', '--'), '-', $slug);


  return strtolower(utf8_encode($slug));
}



/**
 * Função para validar uma URL
 * 
 * @param string $url
 * @return string uma data formatada estilizada
 */
function dataAtual(): string
{
  $diaMes = date('d');
  $diaSemana = date('w');
  $mes = date('n') - 1;
  $ano = date('Y');

  $nomesDiasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];

  $nomesDosMeses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

  $dataFormatada = $nomesDiasDaSemana[$diaSemana].', '.$diaMes.' de '.$nomesDosMeses[$mes].' de '.$ano;
  return $dataFormatada;

}



/**
 * Função para montar uma url de acordo com o ambiente
 * 
 * @param string $url
 * @return string url completa
 */
function url(string $url): string
{
  $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
  $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

  if (str_starts_with($url, '/')) return $ambiente.$url;
  return $ambiente.'/'.$url;
}



/**
 * Função para validar uma URL
 * 
 * @param string $url
 * @return bool
 */
function localhost(): bool
{
  $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

  if($servidor == 'localhost') return true;
  return false;
}
