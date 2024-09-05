<?php

    class poupanca extends conta {

        public function __construct(private int $aniversario = 0, $agencia, $numero, $titular, $saldo){
            parent::__construct($agencia, $numero, $titular, $saldo);
        }

        public function getAniversario(){
            return $this -> aniversario;
        }
        public function setAniversario($aniversario){
            $this -> aniversario = $aniversario;
        }

    }
?>