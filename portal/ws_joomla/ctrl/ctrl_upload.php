<?php

//INCLUSÕES NECESSÁRIAS
include_once '../lib/functions.php';
include_once '../model/conexao.class.php';
include_once '../model/upload.class.php'; 
include_once '../DAO/uploadDAO.class.php';

//INSTANCIANDO OBJETOS
$upload = new upload();
$uploadDAO = new uploadDAO();

//PREENCHENDO OBJETO


$upload->setUp_categoria($_REQUEST['categoria']);
$upload->setUp_cod_arquivo($_REQUEST['cod_arquivo']);

if($upload->getUp_categoria() == 'ped' ){
    $upload->setUp_diretorio('../lib/upload/boletos/');
}else{
    $upload->setUp_diretorio('../lib/upload/inutilizados/');
}

$acao = $_REQUEST['acao'];

if($acao == 'U'){
    
    if($upload->getUp_categoria() == 'ped'){
        
        $pt1 = $uploadDAO->checarPedido($upload->getUp_cod_arquivo());
        
        $pt2 = $uploadDAO->listarPedido($upload->getUp_cod_arquivo());
          
        $total = array_merge($pt1,$pt2);
        
        
        if(empty($pt1)){
            
            $status = array('status' => 'vazio');
            
            echo json_encode($status);
            
        }else{
            echo json_encode($total);
        }

        exit();

    }else if($upload->getUp_categoria() == 'inut'){
        $ocorrencia = $uploadDAO->checarInutilizado($upload->getUp_cod_arquivo());
        
        if($ocorrencia != ''){
            echo json_encode($ocorrencia);
            
        }else{
            $status = array('status' => 'vazio');
            echo json_encode($status);
            
        }
    }
    
}else if($acao == 'ANEXAR'){
    
    UpLoadAntigenosPN($upload->getUp_diretorio());
    
}

?>