<?php

namespace sistema\nucleo;

/**
 * Class Mensagem.
 *
 * @property string $texto
 * @property string $css
 *
 * @method string renderiza()
 *
 * @return string
 *
 * @method string filtrar(string $mensagem)
 *
 * @return string
 */
class Mensagem
{
    private $texto;
    private $css;

    public function __toString()
    {
        return $this->renderiza();
    }

    /**
     * Método responsável por definir a mensagem de erro.
     */
    public function sucesso(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-success';
        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    public function erro(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-danger';
        $this->texto = $this->filtrar($mensagem);

        return $this;
    }

    /**
     * Método responsável pela renderização das mensagens.
     */
    public function renderiza(): string
    {
        return "<div class='{$this->css}'>{$this->texto}</div>";
    }

    /**
     * Método responsável por filtrar as mensagens.
     */
    private function filtrar(string $mensagem): string
    {
        return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
