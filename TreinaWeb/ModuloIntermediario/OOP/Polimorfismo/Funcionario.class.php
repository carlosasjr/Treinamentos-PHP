<?php

/**
 * Funcionario.class [ CADASTRO ]
 * Classe de cadastro do funcionario que herda de Pessoa
 * @copyright (c) 2018, Carlos Junior
 */
class Funcionario extends Pessoa {
    protected $cargo;
    protected $salario;
    
    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return number_format($this->salario, 2, ',', '.');
    }

    public function setCargo($cargo) {
        $this->cargo = ucfirst($cargo) ;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
    
    public function exibe() {
        echo "Funcionário:" . '<br>';
        parent::exibe();
        echo $this->cargo . '<br>';
        echo $this->salario . '<br>';
    }


}
