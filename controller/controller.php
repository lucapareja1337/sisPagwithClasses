<?php
session_start();

require_once("../classes/FolhaPagamento.php");

    
// Recebendo dados do formulario.

    $_dados=array(
        '_nome'=>$_POST['_nome'],
        '_sobrenome'=>$_POST['_sobrenome'],
        '_salario'=>$_POST['_salario'],
        '_cpf'=>$_POST['_cpf'],                                        
        '_idade'=>$_POST['_idade'],
        '_filhos'=>$_POST['_filhos']
    );

  
 
$_Folha = new FolhaPagamento();
// Introducao de dados na classe.
$_Folha->setNome($_dados['_nome']);
$_Folha->setSobrenome($_dados['_sobrenome']);
$_Folha->setCPF($_dados['_cpf']);
$_Folha->setValorSalarioFamilia(30);
$_Folha->setSalario($_dados['_salario']);
$_Folha->setIdade($_dados['_idade']);
$_Folha->setQtdFilho($_dados['_filhos']);
// Folha sendo gerada.
$_Folha->gerarFolha();
$_Folha->getAbono();
$_Folha->getInss();




 // Exibir o cupom
 
 require_once("../views/view_cupom.php");



?>                                                                                                                                                                                                                 