<?php

class FolhaPagamento{

    private $_nome;
    private $_sobrenome;
    private $_cpf;
    private $_salario;
    private $_abono;
    private $_qtd_filho;
    private $_valor_salario_familia;
    private $_inss;
    private $_idade;


    public function __construct(){
        

      
    }

    public function gerarFolha(){
        $this->calculaAbono();
        $this->calculaInss();
    }

    public function getNome(){
        return $this->_nome;
    }
    
    public function setNome($_nome){
        $this->_nome=$_nome;
    }

    public function getSobrenome(){
        return $this->_sobrenome;
    }

    public function setSobrenome($_sobrenome){
        $this->_sobrenome = $_sobrenome;
    }

    public function getCPF(){
        return $this->_cpf;
    }

    public function setCPF($_cpf){
        $this->_cpf=$_cpf;
    }

    public function getSalario():float {
            return $this->_salario;
    }

    public function setSalario($_salario) {
        $this->_salario = $_salario;
    }

    public function getAbono():float {
        return $this->_abono;
    }

    public function setAbono($_abono) {
        $this->_abono = $_abono;
    }

    public function getQtdFilho():int{
        return $this->_qtd_filho;
    }

    public function setQtdFilho($_qtd_filho) {
        $this->_qtd_filho = $_qtd_filho;
    }

    public function getInss():float{
        return $this->_inss;
    }

    public function setInss($_inss){
        $this->_inss = $_inss;
    }

    public function getIdade():int {
        return $this->_idade;
    }

    public function setIdade($_idade) {
        $this->_idade = $_idade;
    }

    public function getValorSalarioFamilia():int{
        return $this->_valor_salario_familia;
    }
    public function setValorSalarioFamilia($_valor_salario_familia){
        $this->_valor_salario_familia = $_valor_salario_familia;
    }




    private function calculaAbono(){

        if($this->getIdade()>=40)
        {
             $this->setAbono(800.00);
        }
        else
        {
            $this->setAbono(0.00);
            
        }

    }

    
    private function calculaInss(){

        $this->setInss($this->getSalario()*0.08);
    }


    public function SalarioFamilia(){
        
             return  $this->getQtdFilho()*$this->getValorSalarioFamilia();
    }

    public function SalarioBruto(){

           return ($this->getSalario()+$this->getAbono()+$this->getValorSalarioFamilia());
    }

    public function SalarioLiquido(){

           return $this->SalarioBruto()-$this->getInss();
    }



    
    

}

?>