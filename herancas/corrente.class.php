<?php

    class corrente extends contas {

        public function __construct(private float $limite = 0.00){
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