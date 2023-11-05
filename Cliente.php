<?php
class Cliente extends Conta {
    private $idade;
    private $endereco;
    private $datadeNascimento;
    
    public function __construct(string $numero,float $saldo, string $nome, int $idade, string $endereco, string $datadeNascimento) {
        parent::__construct($numero, $nome, $saldo);
        $this->definirIdade($idade);
        $this->definirEndereco($endereco);
        $this->definirDatadeNascimento($datadeNascimento);
    }

    public function definirIdade($idade) {
        $this->idade = $idade;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function definirEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function retornarEndereco() {
        return $this->endereco;
    }
    public function definirDatadeNascimento($datadeNascimento) {
        $this->datadeNascimento = $datadeNascimento;
    }
    public function retornarDatadeNascimento() {
        return $this->datadeNascimento;
    }
}