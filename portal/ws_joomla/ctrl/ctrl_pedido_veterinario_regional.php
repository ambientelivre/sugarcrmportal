<?php
//INCLUSÕES NECESSÁRIAS
include_once '../configuration.php';
include_once '../model/conexao.class.php';
include_once '../model/pedido_veterinario_regional.class.php';
include_once '../DAO/pedido_veterinario_regionalDAO.class.php';
include_once '../lib/functions.php';

//ecoPre($_POST);
//exit(); 
 
//INSTANCIANDO OBJETOS
$pedido_veterinario_regional = new pedido_veterinario_regional();
$pedido_veterinario_regionalDAO = new pedido_veterinario_regionalDao();

$opt = $_REQUEST['opt'];
$destinatario = $_REQUEST['destinatario'];

if($_GET['acao'] != ''){
    $acao = $_GET['acao'];
    
}else{
    $acao = $_REQUEST['acao'];

}

//PREENCHENDO OBJETO
$pedido_veterinario_regional->setPed_nm_razao($_POST['ped_nm_razao']);
$pedido_veterinario_regional->setPed_quantidade($_POST['ped_quantidade']);
$pedido_veterinario_regional->setPed_produto($_POST['eg_prod']);
$pedido_veterinario_regional->setPed_desc_produto($_POST['ped_desc_produto']);
$pedido_veterinario_regional->setPed_lote($_POST['ped_lote']);
$pedido_veterinario_regional->setPed_valor_unitario($_POST['valor_unitario']);
$pedido_veterinario_regional->setPed_valor_total($_POST['ped_valor_total']);
$pedido_veterinario_regional->setPed_status($_POST['ped_status']);
$pedido_veterinario_regional->setPed_codigo_boleto($_POST['ped_codigo_boleto']);

//DEFININDO ORIGEM
if($opt == 'regional'){
    $origem = $_REQUEST['ped_reg_origem'];
    $pedido_veterinario_regional->setPed_reg_origem($_POST['ped_reg_origem']);
    
}else if($opt == 'secretaria'){
    $pedido_veterinario_regional->setPed_sec_origem($_POST['ped_sec_origem']);
    
}else if($opt == 'tecpar'){
    $origem = $_REQUEST['opt'];
    
}

//DEFININDO O DESTINO
if($destinatario == 'regional'){
    $pedido_veterinario_regional->setPed_reg_destino($_POST['ped_reg_destino']);

}else if($destinatario == 'secretaria'){
    $pedido_veterinario_regional->setPed_reg_destino($_POST['ped_sec_destino']);

}else if($destinatario == 'cliente'){
    $pedido_veterinario_regional->setPed_clie_destino($_POST['ped_nm_razao']);

}

if($acao == 'I'){
      
    $pedido_veterinario_regionalDAO->inserirPedido_veterinario_regional(
        $pedido_veterinario_regional->getPed_nm_razao(),
        $pedido_veterinario_regional->getPed_quantidade(),
        $pedido_veterinario_regional->getPed_desc_produto(),
        $pedido_veterinario_regional->getPed_produto(),
        $pedido_veterinario_regional->getPed_valor_total(),
        $pedido_veterinario_regional->getPed_status(),
        $pedido_veterinario_regional->getPed_reg_origem(),
        $pedido_veterinario_regional->getPed_sec_origem(),
        $pedido_veterinario_regional->getPed_nm_razao(),
        $pedido_veterinario_regional->getPed_lote(),
        $pedido_veterinario_regional->getPed_valor_unitario(),
        $pedido_veterinario_regional->getPed_reg_destino());
    
    include_once '../msg.php';
    
    exit();
    
} else if($acao == 'C'){
    $pedido_veterinario_regionalDAO->consultarDadosEstoque();
    
    exit();

}else if($acao == 'CB'){
    
    
    $pedido_veterinario_regional->setPed_sec_origem($_POST['ped_sec_origem']);
    $pedido_veterinario_regional->setPed_sec_destino($_POST['ped_sec_destino']);
    $pedido_veterinario_regional->setPed_reg_origem($_POST['ped_reg_origem']);
    $pedido_veterinario_regional->setPed_reg_destino($_POST['ped_reg_destino']);
    $pedido_veterinario_regional->setPed_clie_destino($_POST['ped_nm_razao']); 
    $pedido_veterinario_regional->setPed_produto($_POST['ped_produto']);
    
//    $pedido_veterinario_regionalDAO->alterarStatus($_POST['ped_codigo_boleto']);
    
    $pedido_veterinario_regional->getPed_sec_origem();
    
    $jose = $pedido_veterinario_regionalDAO->insereLog(
            
        $pedido_veterinario_regional->getPed_sec_origem(), 
        $pedido_veterinario_regional->getPed_reg_origem(), 
        $pedido_veterinario_regional->getPed_reg_destino(), 
        $pedido_veterinario_regional->getPed_nm_razao(), 
        $pedido_veterinario_regional->getPed_quantidade(), 
        $pedido_veterinario_regional->getPed_produto(),
        $pedido_veterinario_regional->getPed_lote(),
        $pedido_veterinario_regional->getPed_codigo_boleto()
            
    );
    
    $pedido_veterinario_regionalDAO->atualizarEstoque($pedido_veterinario_regional->getPed_produto(), $pedido_veterinario_regional->getPed_quantidade(), $pedido_veterinario_regional->getPed_sec_origem(), $pedido_veterinario_regional->getPed_reg_origem(), $pedido_veterinario_regional->getPed_lote());
    
    try {
        geraTxt();
    } catch(Exception $e) {
        echo '<pre>';
        print_r($e->getMessage());
        echo '</pre>';
        exit();
    }
    
    include_once '../msg.php';
    
    exit();
    
}else if($acao == 'REL_PEDIDO'){
    
    $filtro['sec_origem'] = $_POST['ped_sec_origem'];
    $filtro['sec_destino'] = $_POST['ped_sec_destino'];
    $filtro['reg_origem'] = $_POST['ped_reg_origem'];
    $filtro['reg_destino'] = $_POST['ped_reg_destino'];
    $filtro['clie_destino'] = $_POST['ped_clie_destino'];
    $filtro['status'] = $_POST['ped_status'];
    $filtro['data_inicio'] = $_POST['in_data_inicio'];
    $filtro['data_fim'] = $_POST['in_data_fim'];
    
    $nm_filtro = $pedido_veterinario_regionalDAO->nmFiltro(
        $pedido_veterinario_regional->getPed_sec_origem(),
        $pedido_veterinario_regional->getPed_reg_origem(),
        $_POST['ped_sec_destino'], $_POST['ped_reg_destino'], $_POST['ped_clie_destino'],
        $pedido_veterinario_regional->getPed_status(),
        $_POST['in_data_inicio'], $_POST['in_data_fim']
    );
    
    $rel_pedido = $pedido_veterinario_regionalDAO->relPedido(
        $pedido_veterinario_regional->getPed_sec_origem(),
        $pedido_veterinario_regional->getPed_reg_origem(),
        $_POST['ped_sec_destino'], $_POST['ped_reg_destino'], $_POST['ped_clie_destino'],
        $pedido_veterinario_regional->getPed_status(),
        $_POST['in_data_inicio'], $_POST['in_data_fim']
    );
    
    include_once '../msg.php';
    
    exit();
        
}else if($acao == 'TXT'){
    geraTxt();
    
}else if($acao == 'B'){
  $rel_pedido = $pedido_veterinario_regionalDAO->buscaCliente($_POST['cliente']);
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>