<?php
//INCLUSÕES NECESSÁRIAS
include_once '../model/conexao.class.php';
include_once '../model/requisicao_produto.class.php';
include_once '../DAO/requisicao_produtoDAO.class.php';


//INSTANCIANDO OBJETOS
$requisicao_produto = new requisicao_produto();
$requisicao_produtoDao = new requisicao_produtoDao();

//PREENCHENDO OBJETO
$requisicao_produto->setReq_data($_REQUEST['req_data']);
$requisicao_produto->setReq_solicitante($_REQUEST['req_solicitante']);
$requisicao_produto->setReq_cnpj($_REQUEST['req_cnpj']);
$requisicao_produto->setReq_contato($_REQUEST['req_contato']);
$requisicao_produto->setReq_telefone($_REQUEST['req_telefone']);
$requisicao_produto->setReq_email($_REQUEST['req_email']);
$requisicao_produto->setReq_qnt_frascos($_REQUEST['req_qnt_frascos']);
$requisicao_produto->setReq_desc_produto($_REQUEST['req_desc_prod']);
$requisicao_produto->setReq_lote($_REQUEST['req_lote']);
$requisicao_produto->setReq_val_unit($_REQUEST['req_val_unit']);
$requisicao_produto->setReq_val_total($_REQUEST['req_val_total']);
$requisicao_produto->setReq_observacoes($_REQUEST['req_observacoes']);

if($_GET['acao'] == 'I'){
    
    $requisicao_produtoDao->inserirRequisicao_produto(
        $requisicao_produto->getReq_form_id(), 
        $requisicao_produto->getReq_data(), 
        $requisicao_produto->getReq_solicitante(), 
        $requisicao_produto->getReq_cnpj(), 
        $requisicao_produto->getReq_contato(), 
        $requisicao_produto->getReq_telefone(), 
        $requisicao_produto->getReq_email(), 
        $requisicao_produto->getReq_qnt_frascos(), 
        $requisicao_produto->getReq_desc_prod(), 
        $requisicao_produto->getReq_lote(), 
        $requisicao_produto->getReq_val_unit(), 
        $requisicao_produto->getReq_val_total(), 
        $requisicao_produto->getReq_observacoes());
    
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>