<?php

//INCLUSÕES NECESSÁRIAS
include_once '../model/conexao.class.php';
include_once '../model/cliente_veterinario.class.php';
include_once '../DAO/cliente_veterinarioDAO.class.php';
include_once '../lib/functions.php';

//INSTANCIANDO OBJETOS
$cliente_veterinario = new cliente_veterinario();
$cliente_veterinarioDAO = new cliente_veterinarioDAO();

//ecoPre($_REQUEST);
//exit();

$acao = $_REQUEST['acao'];

//PREENCHENDO OBJETO
$cliente_veterinario->setCli_id($_REQUEST['cliente']);
$cliente_veterinario->setCli_sec($_REQUEST['secretaria']);
$cliente_veterinario->setCli_reg($_REQUEST['regional']);
$cliente_veterinario->setCli_nm_razao($_REQUEST['cli_nm_razao']);
$cliente_veterinario->setCli_nm_fantasia($_REQUEST['cli_nm_fantasia']);
$cliente_veterinario->setCli_tp_logradouro($_REQUEST['clie_tp_logradouro']);
$cliente_veterinario->setCli_logradouro($_REQUEST['cli_logradouro']);
$cliente_veterinario->setCli_numero($_REQUEST['cli_numero']);
$cliente_veterinario->setCli_complemento($_REQUEST['clie_complemento']);
$cliente_veterinario->setCli_cep($_REQUEST['id_cli_cep']);
$cliente_veterinario->setCli_bairro($_REQUEST['cli_bairro']);
$cliente_veterinario->setCli_cidade($_REQUEST['cli_cidade']);
$cliente_veterinario->setCli_estado($_REQUEST['cli_estado']);
$cliente_veterinario->setCli_cnpj_cpf($_REQUEST['cli_cnpj_cpf']);
$cliente_veterinario->setCli_inscricao_estadual($_REQUEST['cli_inscricao_estadual']);
$cliente_veterinario->setCli_contato($_REQUEST['cli_contato']);
$cliente_veterinario->setCli_telefone($_REQUEST['cli_telefone']);
$cliente_veterinario->setCli_email($_REQUEST['cli_email']);
$cliente_veterinario->setCli_crmv($_REQUEST['cli_crmv']);
$cliente_veterinario->setCli_pncebt($_REQUEST['cli_pncebt']);
$cliente_veterinario->setCli_situacao($_REQUEST['cli_situacao']);

if($_GET['acao'] == 'I'){
    
    $cliente_veterinarioDAO->inserirCliente_veterinario(
        $cliente_veterinario->getCli_sec(), 
        $cliente_veterinario->getCli_reg(), 
        $cliente_veterinario->getCli_nm_razao(), 
        $cliente_veterinario->getCli_nm_fantasia(), 
        $cliente_veterinario->getCli_tp_logradouro(), 
        $cliente_veterinario->getCli_logradouro(), 
        $cliente_veterinario->getCli_numero(), 
        $cliente_veterinario->getCli_complemento(), 
        $cliente_veterinario->getCli_cep(), 
        $cliente_veterinario->getCli_bairro(), 
        $cliente_veterinario->getCli_cidade(), 
        $cliente_veterinario->getCli_estado(), 
        $cliente_veterinario->getCli_cnpj_cpf(), 
        $cliente_veterinario->getCli_contato(), 
        $cliente_veterinario->getCli_telefone(), 
        $cliente_veterinario->getCli_email(), 
        $cliente_veterinario->getCli_crmv(), 
        $cliente_veterinario->getCli_pncebt());
        
    include_once '../msg.php';
    exit();
    
}else if($acao == 'B'){
    
    $cliente = $cliente_veterinarioDAO->buscaCliente($_REQUEST['cliente']); 
    exit();
    
}else if($acao == 'U'){
    
    $cliente_veterinarioDAO->alterarCliente($cliente_veterinario, $_REQUEST['ativo']);
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>