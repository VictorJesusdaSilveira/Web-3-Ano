<?php

class Presidente {
    private int $num;
    private string $nome;
    private int $inicio;
    private int $fim;


    public function __construct($num , $nome , $inicio , $fim){
        $this->num = $num;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of inicio
     */
    public function getInicio(): int
    {
        return $this->inicio;
    }

    /**
     * Set the value of inicio
     */
    public function setInicio(int $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get the value of fim
     */
    public function getFim(): int
    {
        return $this->fim;
    }

    /**
     * Set the value of fim
     */
    public function setFim(int $fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}



?>
