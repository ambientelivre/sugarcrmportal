<?php
//INCLUSÕES NECESSÁRIAS
include_once '../lib/functions.php';
include_once '../model/conexao.class.php';
include_once '../model/secretarias.class.php';
include_once '../DAO/secretariasDAO.class.php';


//INSTANCIANDO OBJETOS
$secretarias = new secretarias();
$secretariasDao = new secretariasDao();

//echo '<pre>';
//print_r($_REQUEST);
//echo '</pre>';
//exit();


//PREENCHENDO OBJETO
$secretarias->setSec_razao_social($_REQUEST['sec_razao_social']);
$secretarias->setSec_nm_fantasia($_REQUEST['sec_nm_fantasia']);
$secretarias->setSec_tp_logradouro($_REQUEST['sec_tp_logradouro']);
$secretarias->setSec_logradouro($_REQUEST['sec_logradouro']);
$secretarias->setSec_numero($_REQUEST['sec_numero']);
$secretarias->setSec_complemento($_REQUEST['sec_complemento']);
$secretarias->setSec_cep($_REQUEST['sec_cep']);
$secretarias->setSec_bairro($_REQUEST['sec_bairro']);
$secretarias->setSec_cidade($_REQUEST['sec_cidade']);
$secretarias->setSec_estado($_REQUEST['sec_estado']);
$secretarias->setSec_cnpj($_REQUEST['sec_cnpj']);
$secretarias->setSec_inscricao_estadual($_REQUEST['sec_inscricao_estadual']);
$secretarias->setSec_cnae($_REQUEST['sec_cnae']);
$secretarias->setSec_contato($_REQUEST['sec_contato']);
$secretarias->setSec_telefone($_REQUEST['sec_telefone']);
$secretarias->setSec_email($_REQUEST['sec_email']);
$secretarias->setSec_pncebt($_REQUEST['sec_pncebt']);
$secretarias->setSec_pncebt_telefone($_REQUEST['sec_pncebt_telefone']);
$secretarias->setSec_pncebt_email($_REQUEST['sec_pncebt_email']);

if($_GET['acao'] == 'I'){
    
    $secretariasDao->inserirSecretarias(
                        $secretarias->getSec_form_id(), 
                        $secretarias->getSec_razao_social(), 
                        $secretarias->getSec_nm_fantasia(), 
                        $secretarias->getSec_tp_logradouro(), 
                        $secretarias->getSec_logradouro(), 
                        $secretarias->getSec_numero(), 
                        $secretarias->getSec_complemento(), 
                        $secretarias->getSec_cep(), 
                        $secretarias->getSec_bairro(), 
                        $secretarias->getSec_cidade(), 
                        $secretarias->getSec_estado(), 
                        $secretarias->getSec_cnpj(), 
                        $secretarias->getSec_inscricao_estadual(), 
                        $secretarias->getSec_cnae(), 
                        $secretarias->getSec_contato(), 
                        $secretarias->getSec_telefone(), 
                        $secretarias->getSec_email(), 
                        $secretarias->getSec_pncebt(), 
                        $secretarias->getSec_pncebt_telefone(), 
                        $secretarias->getSec_pncebt_email());
        
    include_once '../msg.php';
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>