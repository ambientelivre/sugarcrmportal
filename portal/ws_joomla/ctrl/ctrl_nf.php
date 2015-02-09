<?php



//INCLUSÕES NECESSÁRIAS
include_once '../model/conexao.class.php';
include_once '../model/nf.class.php';
include_once '../DAO/nfDAO.class.php';
include_once '../lib/functions.php';

//INSTANCIANDO OBJETOS
$nf = new nf();
$nfDAO = new nfDAO();

//ecoPre($_REQUEST);

$acao = $_REQUEST['acao'];

//PREENCHENDO OBJETO
$nf->setNf_id($_REQUEST['ped_id']);
//$nf->setNf_cb($_REQUEST['']);

if($acao == 'AT'){
    
    $pedido = $nfDAO->listarPedido($nf);
    
    require_once '../view/view_nf.php';
    
    exit();
    
}else if($acao == 'A'){
    
    $nfDAO->atender($_REQUEST);
    
    require_once '../msg.php';
    
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>