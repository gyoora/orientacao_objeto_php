<?php
    class Pessoa{
        public function _construct(
            private string $nome = ''
        ){}

        public function getNome(){
            return $this -> nome
        }
    }
?>