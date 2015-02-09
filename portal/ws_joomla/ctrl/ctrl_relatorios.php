<?php
//INCLUSÕES NECESSÁRIAS
include_once '../configuration.php';
include_once '../model/conexao.class.php';
include_once '../model/relatorios.class.php';
include_once '../DAO/relatoriosDAO.class.php';
include_once '../lib/functions.php';


////INSTANCIANDO OBJETOS
$relatorios = new relatorios();
$relatoriosDAO = new relatoriosDAO();

$acao = $_REQUEST['acao'];

$relatorios->setRel_sec_origem($_REQUEST['rel_sec_origem']);
$relatorios->setRel_reg_origem($_REQUEST['rel_reg_origem']);
$relatorios->setRel_sec_destino($_REQUEST['rel_sec_destino']);
$relatorios->setRel_reg_destino($_REQUEST['rel_reg_destino']);
$relatorios->setRel_produto($_REQUEST['rel_produto']);
$relatorios->setRel_lote($_REQUEST['rel_lote']);
$relatorios->setRel_dt_inicio($_REQUEST['rel_dt_inicio']);
$relatorios->setRel_dt_fim($_REQUEST['rel_dt_fim']);

if($acao == 'LOG_REL'){
    
    $filtro = array();
    
    $sec_origem = $relatorios->getRel_sec_origem();
    if (empty( $sec_origem )){
        $sec_origem= "";

    } else {
        $filtro['sec_origem'] = $sec_origem;
        $sec_origem = " AND log_sec_origem = '".$sec_origem."'";
        
    }
    
    $reg_origem = $relatorios->getRel_reg_origem();
    if(empty($reg_origem)){
        $reg_origem = "";
    }else{
        $filtro['reg_origem'] = $reg_origem;
        $reg_origem = " AND log_reg_origem = '".$reg_origem."'";
        
    }

    $sec_destino = $relatorios->getRel_sec_destino();
    if(empty($sec_destino)){
        $sec_destino = "";
    }else{
        $filtro['sec_destino'] = $sec_destino;
        $sec_destino = " AND log_sec_destino = '" . $sec_destino . "'";
        
    }

    $reg_destino = $relatorios->getRel_reg_destino();
    if(empty($reg_destino)){
        $reg_destino = "";
    }else{
        $filtro['reg_destino'] = $reg_destino;
        $reg_destino = " AND log_reg_destino = '" . $reg_destino . "'";
        
    }

    $produto = $relatorios->getRel_produto();
    if(empty($produto)){
        $produto = "";
    }else{
        $filtro['produto'] = $produto;
        $produto = " AND log_prod = '" . $produto . "'";
        
    }

    $lote = $relatorios->getRel_lote();
    if(empty($lote)){
        $lote = "";
    }else{
        $filtro['lote'] = $lote;
        $lote = " AND log_lote = '" . $lote . "'";
        
    }
    
    $dt_inicio = $relatorios->getRel_dt_inicio();
    
    $dt_fim = $relatorios->getRel_dt_fim();
    
    if ((empty( $dt_inicio )) && (empty( $dt_fim )) ){
        $data= "";

    } else {
        
        if($dt_inicio != '' && $dt_fim !=''){
            $data = " AND date_format( log.log_data, '%d/%m/%Y' )  BETWEEN '".$dt_inicio ."' AND '".$dt_fim ."'"; 
            $filtro['data'] = 'Data entre ' . $dt_inicio . ' e '. $dt_fim;    
        }else if($dt_inicio != ''){
            $filtro['data'] = $dt_inicio;
            $data = " AND date_format( log.log_data, '%d/%m/%Y' ) = '" . $dt_inicio . "'";
        }else{
            $filtro['data'] = $dt_fim;
            $data = " AND date_format( log.log_data, '%d/%m/%Y' ) = '" . $dt_fim . "'";
        }

    }
    
    $filtro = $relatoriosDAO->geraFiltro($filtro);
        
    $rel_log = $relatoriosDAO->geraRelatorioLog($sec_origem, $reg_origem, $sec_destino, $reg_destino, $produto, $lote, $data);
    
    include_once '../msg.php';
    
}else if($acao == 'REL_INUT'){
    $filtro = array();
    
    $filtro['secretaria'] = $_REQUEST['in_secretaria'];
    $filtro['regionais'] = $_REQUEST['in_regionais'];
    $filtro['produto'] = $_REQUEST['in_produto'];
    $filtro['lote'] = $_REQUEST['in_lote'];
    $filtro['data_inicio'] = $_REQUEST['in_data_inicio'];
    $filtro['data_fim'] = $_REQUEST['in_data_fim'];

    // CONVERTENDO DATA PARA EVITAR PROBLEMAS COM QUERY EM BANCO
    if($filtro['data_inicio'] != ''){
        $dt_inicio = converte_data($filtro['data_inicio']);
        
    }

    if($filtro['data_fim'] != ''){
        $dt_fim = converte_data($filtro['data_fim']);
        
    }

    // CONTROLE DO FILTRO SECRETARIA
    if($filtro['secretaria'] != ''){
        $secretaria = "AND inut.in_secretaria = '" . $filtro['secretaria'] . "'";
        
    }

    // CONTROLE DO FILTRO REGIONAL
    if($filtro['regionais'] != ''){
        $regional = "AND inut.in_regionais = '" . $filtro['regionais'] . "'";
    }

    // CONTROLE DO FILTRO PRODUTO
    if($filtro['produto'] != ''){
        $produto = "AND inut.in_produto = '" . $filtro['produto'] . "'";
    }

    //CONTROLE DO FILTRO LOTE
    if($filtro['lote'] != ''){
        $lote = "AND inut.in_lote = '" . $filtro['lote'] . "'";
    }

    // CONTROLE DO FILTRO PERIODO
    if($dt_inicio != '' && $dt_fim != ''){
        $periodo = "AND inut.in_data BETWEEN '" . $dt_inicio . "' AND '" . $dt_fim ."'";
        $filtro['data'] = 'Data entre ' . $dt_inicio . ' e '. $dt_fim;    
    }else if($dt_inicio == '' && $dt_fim == ''){
        $periodo = "";
    }else if($dt_inicio != ''){
        $periodo = "AND inut.in_data = '" . $dt_inicio . "'";
    }else{
        $periodo = "AND inut.in_data = '" . $dt_fim . "'";
    }
    
    $rel_inut = $relatoriosDAO->relInut($secretaria, $regional, $produto, $lote, $periodo);
    
    $filtro = $relatoriosDAO->geraFiltro($filtro);
    
    include_once '../msg.php';
        
    exit();
    
}else if($acao == 'REL_PEDIDO'){
    
    $filtro['sec_origem'] = $_POST['ped_sec_origem'];
    $filtro['sec_destino'] = $_POST['ped_sec_destino'];
    $filtro['reg_origem'] = $_POST['ped_reg_origem'];
    $filtro['reg_destino'] = $_POST['ped_reg_destino'];
    $filtro['cliente'] = $_POST['ped_clie_destino'];
    $filtro['status'] = $_POST['ped_status'];
    $filtro['data_inicio'] = $_POST['in_data_inicio'];
    $filtro['data_fim'] = $_POST['in_data_fim'];

                    
        // CONVERTENDO DATA PARA EVITAR PROBLEMAS COM QUERY EM BANCO
        if($filtro['data_inicio'] != ''){
            $dt_inicio = converte_data($filtro['data_inicio']);
        }

        if($filtro['data_fim'] != ''){
            $dt_fim = converte_data($filtro['data_fim']);
        }

        // CONTROLE DO FILTRO SECRETARIA DE ORIGEM
        if($filtro['sec_origem'] != ''){
            $sec_origem = "AND ped.ped_sec_origem = '" . $filtro['sec_origem'] . "'";
        }
        
        // CONTROLE DO FILTRO SECRETARIA DE DESTINO
        if($filtro['sec_destino'] != ''){
            $sec_destino = "AND ped.ped_sec_destino = '" . $filtro['sec_destino'] . "'";
        }

        // CONTROLE DO FILTRO REGIONAL DE ORIGEM
        if($filtro['reg_origem'] != ''){
            $reg_origem = "AND ped.ped_reg_origem = '" . $filtro['reg_origem'] . "'";
        }

        // CONTROLE DO FILTRO REGIONAL DE DESTINO
        if($filtro['reg_destino'] != ''){
            $reg_destino = "AND ped.ped_reg_destino = '" . $filtro['reg_destino'] . "'";
        }

        // CONTROLE DO FILTRO CLIENTE DESTINO
        if($filtro['cliente'] != ''){
            $clie_destino = "AND ped.ped_clie_destino = '" . $filtro['cliente'] . "'";
        }

        //CONTROLE DO FILTRO LOTE
        if($filtro['status'] != ''){
            $status = "AND ped.ped_status = '" . $filtro['status'] . "'";
        }

        // CONTROLE DO FILTRO PERIODO
        if($dt_inicio != '' && $dt_fim != ''){
            $periodo = "AND ped.ped_data BETWEEN '" . $dt_inicio . "' AND '" . $dt_fim ."'";
            $filtro['data'] = 'Data entre ' . $dt_inicio . ' e '. $dt_fim;    
                    
        }else if($dt_inicio == '' && $dt_fim == ''){
            $periodo = "";
            $filtro['data'] = '';    
            
        }else if($dt_inicio != ''){
            $periodo = "AND ped.ped_data = '" . $dt_inicio . "'";
            $filtro['data'] = $dt_inicio;
            
        }else{
            $periodo = "AND ped.ped_data = '" . $dt_fim . "'";
            $filtro['data'] = $dt_fim;
            
        }
            
    $rel_pedido = $relatoriosDAO->relPedido($sec_origem, $sec_destino, $reg_origem, $reg_destino, $clie_destino, $status, $periodo);
    
    $filtro = $relatoriosDAO->geraFiltro($filtro);
    
    include_once '../msg.php';
    
    exit();
    
}else if($acao == 'REL_GERAL'){
    
    $filtro['secretaria'] = $_POST['secretaria'];
    $filtro['regional'] = $_POST['regional'];
    $filtro['produto'] = $_POST['produtos'];
    $filtro['lote'] = $_POST['lote'];
    
    // CONTROLE DO FILTRO SECRETARIA DE ORIGEM
    if($filtro['secretaria'] != ''){
        $secretaria = "AND eg.eg_secretaria = '" . $filtro['secretaria'] . "'";
    }
    
    // CONTROLE DO FILTRO REGIONAL DE ORIGEM
    if($filtro['regional'] != ''){
        $regional = "AND eg.eg_regional = '" . $filtro['regional'] . "'";
    }
  
    // CONTROLE DO FILTRO PRODUTO
    if($filtro['produto'] != ''){
        $produto = "AND eg.eg_cod_prod = '" . $filtro['produto'] . "'";
    }  
    
    //CONTROLE DO FILTRO LOTE
    if($filtro['lote'] != ''){
        $lote = "AND eg.eg_lote = '" . $filtro['lote'] . "'";
    }
    
    $rel_geral = $relatoriosDAO->gerarRelatorio($secretaria, $regional, $produto, $lote);
    
//    ecoPre($rel_geral);
    
    $filtro = $relatoriosDAO->geraFiltro($filtro);
    
    include_once '../msg.php';
    
    exit();  
}

?>