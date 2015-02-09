<?php

class secretariasDao {
    public $p = null;
    
    public function secretariasDao(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }

    public function inserirSecretarias($sec_form_id, $sec_razao_social, $sec_nm_fantasia, $sec_tp_logradouro, $sec_logradouro, $sec_numero, $sec_complemento, $sec_cep, $sec_bairro, $sec_cidade, $sec_estado, $sec_cnpj, $sec_inscricao_estadual, $sec_cnae, $sec_contato, $sec_telefone, $sec_email, $sec_pncebt, $sec_pncebt_telefone, $sec_pncebt_email){
        
//INSERINDO INFORMAÇÕES NO JOOMLA
        
//        $sql = "INSERT INTO portal_homologacao.jtec_integracao_joomla_crm_secretarias(
//            id ,
//            uniq_id ,
//            user_id ,
//            created ,
//            modified ,
//            sec_razao_social ,
//            sec_nm_fantasia ,
//            sec_tp_logradouro ,
//            sec_logradouro ,
//            sec_numero ,
//            sec_complemento ,
//            sec_cep ,
//            sec_bairro ,
//            sec_cidade ,
//            sec_estado ,
//            sec_cnpj ,
//            sec_inscricao_estadual ,
//            sec_cnae ,
//            sec_contato ,
//            sec_telefone ,
//            sec_email ,
//            sec_pncebt ,
//            sec_pncebt_telefone ,
//            sec_pncebt_email
//            )
//            VALUES (
//            '" . date('HisB') . "', 
//            '1',  
//            '1', 
//            '" . date('Y-m-d H:i:s') . "', 
//            '" . date('Y-m-d H:i:s') . "',    
//            '" . $sec_razao_social . "', 
//            '" . $sec_nm_fantasia . "', 
//            '" . $sec_tp_logradouro . "', 
//            '" . $sec_logradouro . "', 
//            '" . $sec_numero . "', 
//            '" . $sec_complemento . "', 
//            '" . $sec_cep . "', 
//            '" . $sec_bairro . "', 
//            '" . $sec_cidade . "', 
//            '" . $sec_estado . "', 
//            '" . $sec_cnpj . "', 
//            '" . $sec_inscricao_estadual . "', 
//            '" . $sec_cnae . "', 
//            '" . $sec_contato . "', 
//            '" . $sec_telefone . "', 
//            '" . $sec_email . "', 
//            '" . $sec_pncebt . "', 
//            '" . $sec_pncebt_telefone . "', 
//            '" . $sec_pncebt_email . "'
//            );";
//        
//        $result = mysql_query($sql);
        
//INSERINDO INFORMAÇÕES NO SUGAR
        
        $sql = "INSERT INTO homologacao_sugarcrm.ant_secretarias (
            id,
            name,
            date_entered,
            date_modified,
            modified_user_id,
            created_by,
            description,
            deleted,
            assigned_user_id,
            sec_razao_social,
            sec_nome_fantasia,
            sec_estado,
            sec_cidade,
            sec_cep,
            sec_bairro,
            sec_email,
            sec_telefone,
            sec_tp_logradouro,
            sec_logradouro,
            sec_numero,
            sec_complemento,
            sec_cnpj,
            sec_ie,
            sec_cnae,
            sec_contato
            )
            VALUES (
                '" . date('ymdHis') . "',
                '" . $sec_nm_fantasia . "', 
                '" . date('Y-m-d H:i:s') . "',
                '" . date('Y-m-d H:i:s') . "',
                '1', 
                '1', 
                '1', 
                '0', 
                '1', 
                '" . $sec_razao_social . "', 
                '" . $sec_nm_fantasia . "', 
                '" . $sec_estado . "', 
                '" . $sec_cidade . "', 
                '" . $sec_cep . "', 
                '" . $sec_bairro . "', 
                '" . $sec_email . "', 
                '" . $sec_telefone . "', 
                '" . $sec_tp_logradouro . "', 
                '" . $sec_logradouro . "', 
                '" . $sec_numero . "', 
                '" . $sec_complemento . "', 
                '" . $sec_cnpj . "', 
                '" . $sec_inscricao_estadual . "', 
                '" . $sec_cnae . "', 
                '" . $sec_contato . "'
            );";
                
            try {
                
                inserirDados($sql);

                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'Secretaria';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/cadastro-de-secretarias';
                $_SESSION['msg_sucess'] = 'Secretaria cadastrada com sucesso.';
                
                return;
                
            } catch(Exception $e) {

                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                
                exit();
            }
            
        exit();

        }
    }
?>
    