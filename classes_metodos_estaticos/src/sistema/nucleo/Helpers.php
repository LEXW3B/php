<?php

namespace sistema\nucleo;

/**
 * Class Helpers.
 */
class Helpers
{
    /**
     * Método responsável por definir a mensagem de erro.
     */
    public static function saudacao(string $helpers): string
    {
        return $helpers;
    }

    /**
     * Método responsável por filtrar as mensagens.
     */
    public static function limparNumero(string $numero): string
    {
        return preg_replace('/[^0-9]/', '', $numero);
    }
}
