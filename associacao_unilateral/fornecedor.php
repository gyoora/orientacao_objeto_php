<?php
    class Fornecedor {

        public function __construct(
        private string $razao_social = '',
        private string $nome_fantasia = '',
        private string $cnpj = '',
        private string $telefone = ''
        ){}

        public function getRazaoSocial() {
            return $this -> razao_social;
        }
        public function getNomeFantasia() {
            return $this -> nome_fantasia;
        }
        public function getCnpj() {
            return $this -> cnpj;
        }
        public function getTelefone() {
            return $this -> telefone;
        }
        
    } //Fim da classe.

?>