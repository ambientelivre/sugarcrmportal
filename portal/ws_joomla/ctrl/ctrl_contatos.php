<?php

//INCLUSÕES NECESSÁRIAS
include_once '../model/conexao.class.php';
include_once '../model/contatos.class.php';
include_once '../DAO/contatosDAO.class.php';
include_once '../lib/functions.php';

//INSTANCIANDO OBJETOS
$contato = new contatos();
$contatoDAO = new contatosDAO();

$acao = $_REQUEST['acao'];

//PREENCHENDO OBJETO
$contato->setCt_id($_REQUEST['ct_id']);
$contato->setCt_nome($_REQUEST['ct_nome']);
$contato->setCt_sobrenome($_REQUEST['ct_sobrenome']);
$contato->setCt_cargo($_REQUEST['ct_cargo']);
$contato->setCt_telefone($_REQUEST['ct_telefone']);
$contato->setCt_celular($_REQUEST['ct_celular']);
$contato->setCt_email($_REQUEST['ct_email']);
$contato->setCt_secretaria($_REQUEST['ct_sec']);
$contato->setCt_regional($_REQUEST['ct_reg']);

if($acao == 'P'){
    
    $key = '';
    
    if($contato->getCt_secretaria() != ''){

        $sql = "SELECT * FROM homologacao_sugarcrm.ant_secretaias_contacts_c 
                WHERE ant_secretb807etarias_ida = " . $contato->getCt_secretaria();
        
        
    }else if($contato->getCt_regional() != ''){
        
        $sql = "SELECT * FROM homologacao_sugarcrm.ant_regionais_contacts_c 
                WHERE ant_region4141gionais_ida = " . $_REQUEST['ct_reg'];
    }else{
        
        $key = 'AC';
        
        $sql = "SELECT * FROM homologacao_sugarcrm.contacts WHERE id = " . $contato->getCt_id() . " LIMIT 0 , 30";
       
    }
    
    $contatos = $contatoDAO->pesquisaContato($sql,$key);
    
    if($key != 'AC'){
        include_once '../msg.php';
        
    }else{
        include_once '../view/contato.php';
        
    }
    
    exit();
    
}else if($acao == 'A'){
    
    $contatos = $contatoDAO->altertarContato($contato);
    
    $key = '';    
    
    
    if($contato->getCt_secretaria() != ''){
        $sql = "SELECT * FROM homologacao_sugarcrm.ant_secretaias_contacts_c 
                WHERE ant_secretb807etarias_ida = " . $contato->getCt_secretaria();
    
    }else{
        $sql = "SELECT * FROM homologacao_sugarcrm.ant_regionais_contacts_c 
                WHERE ant_region4141gionais_ida = " . $_REQUEST['ct_reg'];
    }

    
    $contatos = $contatoDAO->pesquisaContato($sql,$key);
    $_SESSION['msg_sucess'] = 'Alteração Realizada com Sucesso.';
    
    include_once '../msg.php';
    
    exit();
      
}else if($acao == 'BS'){
    $contatoDAO->buscaRegional($_REQUEST['sec']);
    
}else if($acao == 'I'){
    
    if($_REQUEST['key'] == ''){
        $key = 'IN';
        include_once '../view/contato.php';
        exit();
    }else{
        
        $contatoDAO->inserirContato($contato);

        include_once '../msg.php';    
    }
    
    exit();
    
}else if($acao == 'E'){

    if($_REQUEST['key'] == ''){
        $key = 'EX';

        $sql = "SELECT * FROM homologacao_sugarcrm.contacts WHERE id = " . $contato->getCt_id() . " LIMIT 0 , 30";
        $contatos = $contatoDAO->pesquisaContato($sql,$key);

        include_once '../view/contato.php';
    }else{
        
        $contatoDAO->excluiContato($contato);
        
        if($_REQUEST['ct_sec'] != ''){
            $sql = "SELECT * FROM homologacao_sugarcrm.ant_secretaias_contacts_c 
                    WHERE ant_secretb807etarias_ida = " . $contato->getCt_secretaria();            
            
        }else{
            $sql = "SELECT * FROM homologacao_sugarcrm.ant_regionais_contacts_c 
                    WHERE ant_region4141gionais_ida = " . $contato->getCt_regional();
        }
        
        $key = '';

        $contatos = $contatoDAO->pesquisaContato($sql,$key);
        
        include_once '../msg.php';
    }
    
    exit();
    
}else{
    $_SESSION['error'] = true;
    $_SESSION['msg_error'] = 'ERRO';
    include_once '../msg.php';
    exit();
}

?>