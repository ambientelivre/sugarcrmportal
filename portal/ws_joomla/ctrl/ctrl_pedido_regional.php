<?php
//INCLUSÕES NECESSÁRIAS
include_once '../model/conexao.class.php';
include_once '../model/pedido_regional.class.php';
include_once '../DAO/pedido_regionalDAO.class.php';

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
exit();


//INSTANCIANDO OBJETOS
$pedido_regional = new pedido_regional();
$pedido_regionalDao = new pedido_regionalDao();

//PREENCHENDO OBJETO
$pedido_regional->setCli_nm_razao($_REQUEST['cli_nm_razao']);
$pedido_regional->setCli_nm_fantasia($_REQUEST['cli_nm_fantasia']);
$pedido_regional->setCli_tp_logradouro($_REQUEST['cli_tp_logradouro']);
$pedido_regional->setCli_logradouro($_REQUEST['cli_logradouro']);
$pedido_regional->setCli_numero($_REQUEST['cli_numero']);
$pedido_regional->setCli_complemento($_REQUEST['cli_complemento']);
$pedido_regional->setCli_cep($_REQUEST['cli_cep']);
$pedido_regional->setCli_bairro($_REQUEST['cli_bairro']);
$pedido_regional->setCli_cidade($_REQUEST['cli_cidade']);
$pedido_regional->setCli_estado($_REQUEST['cli_estado']);
$pedido_regional->setCli_cnpj_cpf($_REQUEST['cli_cnpj_cpf']);
$pedido_regional->setCli_inscricao_estadual($_REQUEST['cli_inscricao_estadual']);
$pedido_regional->setCli_contato($_REQUEST['cli_contato']);
$pedido_regional->setCli_telefone($_REQUEST['cli_telefone']);
$pedido_regional->setCli_email($_REQUEST['cli_email']);
$pedido_regional->setCli_crmv($_REQUEST['cli_crmv']);
$pedido_regional->setCli_regional($_REQUEST['cli_regional']);
$pedido_regional->setCli_pncebt($_REQUEST['cli_pncebt']);
$pedido_regional->setCli_situacao($_REQUEST['cli_situacao']);

if($_GET['acao'] == 'I'){
        
    $pedido_regionalDao->inserirpedido_regional(
        $pedido_regional->getCli_form_id(), 
        $pedido_regional->getCli_nm_razao(), 
        $pedido_regional->getCli_nm_fantasia(), 
        $pedido_regional->getCli_tp_logradouro(), 
        $pedido_regional->getCli_logradouro(), 
        $pedido_regional->getCli_numero(), 
        $pedido_regional->getCli_complemento(), 
        $pedido_regional->getCli_cep(), 
        $pedido_regional->getCli_bairro(), 
        $pedido_regional->getCli_cidade(), 
        $pedido_regional->getCli_estado(), 
        $pedido_regional->getCli_cnpj_cpf(), 
        $pedido_regional->getCli_inscricao_estadual(), 
        $pedido_regional->getCli_contato(), 
        $pedido_regional->getCli_telefone(), 
        $pedido_regional->getCli_email(), 
        $pedido_regional->getCli_crmv(), 
        $pedido_regional->getCli_regional(), 
        $pedido_regional->getCli_pncebt(),
        $pedido_regional->getCli_situacao());
    
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>