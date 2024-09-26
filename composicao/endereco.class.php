<?php
    class Endereco{
        public function __construct(
        private string $logradouro = '', private int $numero = 0, 
        private string $cep = '', 
        private Pessoa $pessoa = new Pessoa()
        ){}
 
        public function getLogradouro(){
            return $this -> logradouro;
        }
 
        public function getNumero(){
            return $this -> numero;
        }
 
        public function getCep(){
            return $this -> cep;
        }
 
        public function getPessoa(){
            return $this -> pessoa;
        }
    }
?>