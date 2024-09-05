<?php

    class Corrente extends Conta {

        public function __construct(private float $limite = 0.00, $agencia, $numero, $titular, $saldo){
            parent::__construct($agencia, $numero, $titular, $saldo);
        }

        public function getLimite(){
            return $this -> limite;
        }
        public function setLimite($limite){
            $this -> limite = $limite;
        }

    }
?>