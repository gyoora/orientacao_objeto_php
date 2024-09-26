<?php
    class Pessoa{
        public function _construct(
            private string $nome = '',
            private array $endereco = array(),
            $logradouro,
            $numero, 
            $cep, 
            $pessoa 
        ){
            $this -> endereco[] = new Endereco(
            $logradouro,
            $numero,
            $cep,
            $pessoa
            );
        }

        public function getNome(){
            return $this -> nome;
        }

        public function setEndereco($logradouro, $numero, $cep, $pessoa){
            $this -> endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
        }
    }
?>