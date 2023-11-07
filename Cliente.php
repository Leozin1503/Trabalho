<?php
class Cliente {
    private string $nome;
    private string $idade;
    private string $endereco;
    private string $datadeNascimento;
    private Conta $conta;
    
    public function __construct($nome, $idade, $endereco, $datadeNascimento, $conta) {
        $this->definirNome($nome);
        $this->definirIdade($idade);
        $this->definirEndereco($endereco);
        $this->definirDataNascimento($datadeNascimento);
        $this->definirConta($conta);
    }

    public function definirNome(string $nome) {
        $this->nome = $nome;
    }
    public function definirIdade(string $idade) {
        $this->idade = $idade;
    }
    public function definirEndereco(string $endereco) {
        $this->endereco = $endereco;
    }
    public function definirDataNascimento(string $datadeNascimento) {
        $this->datadeNascimento = $datadeNascimento;
    }
    public function definirConta(Conta $conta) {
        $this->conta = $conta;
    }
    public function retornarNome() {
        return $this->nome;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function retornarEndereco() {
        return $this->endereco;
    }
    public function retornarDataNascimento() {
        return $this->datadeNascimento;
    }
    public function retornarConta() {
        return $this->conta;
    }
    
}