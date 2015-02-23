<?php

class requisicao_produtoDao {
    public $p = null;
    
    public function requisicao_produtoDao(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
    public function inserirRequisicao_produto(
            $req_form_id,
            $req_data,
            $req_solicitante,
            $req_cnpj,
            $req_contato,
            $req_telefone,  
            $req_email,
            $req_qnt_frascos,
            $req_desc_prod,
            $req_lote,
            $req_val_unit,
            $req_val_total,
            $req_observacoes){
        
//INSERINDO INFORMAÇÕES NO JOOMLA
        
        $sql = "INSERT INTO joomla_diego.t7q2p_jtec_requisicao_produtos_tecpar(
            id ,
            uniq_id,
            user_id,
            created,
            modified,
            req_data,
            req_solicitante,
            req_cnpj,
            req_contato,
            req_telefone,
            req_email,
            req_qnt_frascos,
            req_desc_prod,
            req_lote,
            req_val_unit,
            req_val_total,
            req_observacoes
            )
            VALUES (
            '" . date('His') . "', 
            '1',  
            '1', 
            '" . date('Y-m-d H:i:s') . "', 
            '" . date('Y-m-d H:i:s') . "',    
            '" . $req_data . "', 
            '" . $req_solicitante . "', 
            '" . $req_cnpj . "', 
            '" . $req_contato . "', 
            '" . $req_telefone . "', 
            '" . $req_email . "', 
            '" . $req_qnt_frascos . "', 
            '" . $req_desc_prod . "', 
            '" . $req_lote . "', 
            '" . $req_val_unit . "', 
            '" . $req_val_total . "', 
            '" . $req_observacoes . "'
            );";
        
        $result = mysql_query($sql);
        
//INSERINDO INFORMAÇÕES NO SUGAR
        
        $sql = "INSERT INTO sugar_diego.t3cpa_requisicao_produto (
            id,
            name,
            date_entered,
            date_modified,
            modified_user_id,
            created_by,
            description,
            deleted,
            assigned_user_id,
            req_data,
            req_solicitante,
            req_cnpj,
            req_contato,
            req_telefone,
            req_email,
            req_qnt_frascos,
            req_desc_prod,
            req_lote,
            req_val_unit,
            req_val_total,
            req_observacoes
            )
            VALUES (
                '" . date('His') . "',
                '" . $req_nm_fantasia . "', 
                '" . date('Y-m-d H:i:s') . "',
                '" . date('Y-m-d H:i:s') . "',
                '1', 
                '1', 
                '1', 
                '0', 
                '1', 
                '" . $req_data . "', 
                '" . $req_solicitante . "', 
                '" . $req_cnpj . "', 
                '" . $req_contato . "', 
                '" . $req_telefone . "', 
                '" . $req_email . "', 
                '" . $req_qnt_frascos . "', 
                '" . $req_desc_prod . "', 
                '" . $req_lote . "', 
                '" . $req_val_unit . "', 
                '" . $req_val_total . "', 
                '" . $req_observacoes . "'
            );";
        
        $result = mysql_query($sql);

                
        $_SESSION['sucess'] = true;
        $_SESSION['msg_sucess'] = 'Requisição de Produto realizada com sucesso.';
        include_once '../msg.php';
        
        }        
    }

?>
