<?php

declare(strict_types=1);

class Categoria
{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao) {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
    
	/**
	 * @return string
	 */
	function getNome(): string {
		return $this->nome;
	}
	
	/**
	 * @param string $nome 
	 * @return Categoria
	 */
	function setNome(string $nome): self {
		$this->nome = $nome;
		return $this;
	}
    
	/**
	 * @return string
	 */
	function getDescricao(): string {
		return $this->descricao;
	}
	
	/**
	 * @param string $descricao 
	 * @return Categoria
	 */
	function setDescricao(string $descricao): self {
		$this->descricao = $descricao;
		return $this;
	}
}