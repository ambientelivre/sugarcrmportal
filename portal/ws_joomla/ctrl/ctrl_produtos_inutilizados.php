<?php
//INCLUSÕES NECESSÁRIAS
include_once '../configuration.php';
include_once '../model/conexao.class.php';
include_once '../model/produtos_inutilizados.class.php';
include_once '../DAO/produtos_inutilizadosDAO.class.php';
include_once '../lib/functions.php';

//ecoPre($_REQUEST);

//INSTANCIANDO OBJETOS
$produtos_inutilizados = new produtos_inutilizados();
$produtos_inutilizadosDAO = new produtos_inutilizadosDAO();

//PREENCHENDO OBJETO
$produtos_inutilizados->setIn_id($_POST['in_id']);
$produtos_inutilizados->setIn_data($_POST['in_data']);
$produtos_inutilizados->setIn_secretaria($_POST['in_secretaria']);
$produtos_inutilizados->setIn_regionais($_POST['in_regionais']);
$produtos_inutilizados->setIn_motivo($_POST['in_motivo']);
$produtos_inutilizados->setIn_observacoes($_POST['in_observacoes']);
$produtos_inutilizados->setIn_produto($_POST['in_produto']);
$produtos_inutilizados->setIn_lote($_POST['in_lote']);
$produtos_inutilizados->setIn_qnt($_POST['in_qnt']);

if($_GET['acao'] == 'I'){
    
    $produtos_inutilizadosDAO->inserirProdutos_inutilizados(
        $produtos_inutilizados->getIn_data(), 
        $produtos_inutilizados->getIn_secretaria(),
        $produtos_inutilizados->getIn_regionais(), 
        $produtos_inutilizados->getIn_motivo(),
        $produtos_inutilizados->getIn_observacoes(), 
        $produtos_inutilizados->getIn_produto(), 
        $produtos_inutilizados->getIn_lote(), 
        $produtos_inutilizados->getIn_qnt(),
        $produtos_inutilizados->getIn_nome(),
        $_POST['in_valor_unitario']
    );
    
    $produtos_inutilizadosDAO->insereLog(
        $produtos_inutilizados->getIn_qnt(), 
        $produtos_inutilizados->getIn_lote(), 
        $produtos_inutilizados->getIn_produto(), 
        $produtos_inutilizados->getIn_secretaria(), 
        $produtos_inutilizados->getIn_regionais()
    ); 
    
    $produtos_inutilizadosDAO->atualizarEstoque(
        $produtos_inutilizados->getIn_qnt(), 
        $produtos_inutilizados->getIn_lote(), 
        $produtos_inutilizados->getIn_produto(), 
        $produtos_inutilizados->getIn_secretaria(), 
        $produtos_inutilizados->getIn_regionais()
    ); 
    
    $info = $produtos_inutilizadosDAO->pesquisaProduto(
        $produtos_inutilizados->getIn_secretaria(), 
        $produtos_inutilizados->getIn_regionais(),
        $produtos_inutilizados->getIn_produto() 
    ); 
    
    $produtos_inutilizados->setIn_secretaria($info['secretaria']);
    $produtos_inutilizados->setIn_regionais($info['regional']);
    
    include_once '../msg.php'; 
    exit();
    
}else if($_GET['acao'] == 'REL'){

    $filtro='';

    $sec_or_id = $_POST['sec_or'];
    if (empty( $sec_or_id )){
        $sec_or= "";

    } else {
        $sec_or = " AND log_sec_origem = '".$sec_or_id."'";

    }

    $reg_or_id = $_POST['reg_or'];
    if (!empty( $reg_or_id )){
        $reg_or= "";

    } else {
        $reg_or = " AND log_reg_origem = '".$reg_or_id."'";

    }

    $sec_des_id = $_POST['sec_des'];
    if (empty( $sec_des_id )){
        $sec_des= "";

    } else {
        $sec_des = " AND log_sec_destino = '".$sec_des_id."'";

    }

    $reg_des_id = $_POST['reg_des'];
    if (empty( $reg_des_id )){
        $reg_des= "";

    } else {
        $reg_des = " AND log_reg_destino = '".$reg_des_id."'";

    }

    $produto_id = $_POST['in_produtos'];
    if (empty( $produto_id )){
        $produto= "";

    } else {
        $produto = " AND log_prod = '".$produto_id."'";

    }

    $lote_id = $_POST['lote'];
    if (empty( $lote_id )){
        $lote= "";

    } else {
        $lote = " AND log_lote = '".$lote_id."'"; 
        $filtro=$filtro.' Lote='.$lote_id;

    }

    $dt_in_id = $_POST['in_data_inicio'];
    $dt_fn_id = $_POST['in_data_fim'];
    if ((empty( $dt_in_id )) OR (empty( $dt_fn_id )) ){
        $data= "";

    } else {
        $data = " AND date_format( le.log_data, '%m/%d/%Y' )  BETWEEN '".$dt_in_id ."' AND '".$dt_fn_id ."'"; $filtro=$filtro.' Data entre='.$dt_in_id.' e '.$dt_fn_id;

    }
    
    $t = $produtos_inutilizadosDAO->gerarRelatorio($sec_or, $reg_or, $sec_des, $reg_des, $produto, $lote, $data);
    
    require_once '../msg.php';
    exit();
    
}else if($_GET['acao'] == 'LOG_EST'){
    echo 'OI! =]';
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>