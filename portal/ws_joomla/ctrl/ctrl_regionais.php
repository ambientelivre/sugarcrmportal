<?php
//INCLUSÕES NECESSÁRIAS
include_once '../lib/functions.php';
include_once '../model/conexao.class.php';
include_once '../model/regionais.class.php';
include_once '../DAO/regionaisDAO.class.php';

//INSTANCIANDO OBJETOS
$regionais = new regionais();
$regionaisDAO = new regionaisDAO();

//PREENCHENDO OBJETO
$regionais->setReg_razao_social($_REQUEST['reg_razao_social']);
$regionais->setReg_sec_id($_REQUEST['sec_id']);
$regionais->setReg_nm_fantasia($_REQUEST['reg_nm_fantasia']);
$regionais->setReg_tp_logradouro($_REQUEST['reg_tp_logradouro']);
$regionais->setReg_logradouro($_REQUEST['reg_logradouro']);
$regionais->setReg_numero($_REQUEST['reg_numero']);
$regionais->setReg_complemento($_REQUEST['reg_complemento']);
$regionais->setReg_cep($_REQUEST['reg_cep']);
$regionais->setReg_bairro($_REQUEST['reg_bairro']);
$regionais->setReg_cidade($_REQUEST['reg_cidade']);
$regionais->setReg_estado($_REQUEST['reg_estado']);
$regionais->setReg_cnpj($_REQUEST['reg_cnpj']);
$regionais->setReg_inscricao_estadual($_REQUEST['reg_inscricao_estadual']);
$regionais->setReg_cnae($_REQUEST['reg_cnae']);
$regionais->setReg_contato($_REQUEST['reg_contato']);
$regionais->setReg_telefone($_REQUEST['reg_telefone']);
$regionais->setReg_email($_REQUEST['reg_email']);
$regionais->setReg_pncebt($_REQUEST['reg_pncebt']);
        

if($_GET['acao'] == 'I'){
    
    $regionaisDAO->inserirRegionais(
        $regionais->getReg_form_id(), 
        $regionais->getReg_sec_id(), 
        $regionais->getReg_razao_social(), 
        $regionais->getReg_nm_fantasia(), 
        $regionais->getReg_tp_logradouro(), 
        $regionais->getReg_logradouro(), 
        $regionais->getReg_numero(), 
        $regionais->getReg_complemento(), 
        $regionais->getReg_cep(), 
        $regionais->getReg_bairro(), 
        $regionais->getReg_cidade(), 
        $regionais->getReg_estado(), 
        $regionais->getReg_cnpj(), 
        $regionais->getReg_inscricao_estadual(), 
        $regionais->getReg_cnae(), 
        $regionais->getReg_contato(), 
        $regionais->getReg_telefone(), 
        $regionais->getReg_email(), 
        $regionais->getReg_pncebt()
    );
    
    include_once '../msg.php';
    
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>