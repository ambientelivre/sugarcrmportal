<?php

class regionaisDao {
    public $p = null;
    
    public function regionaisDao(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
    public function inserirRegionais(
                        $reg_form_id,
                        $reg_id_sec,
                        $reg_razao_social,
                        $reg_nm_fantasia, 
                        $reg_tp_logradouro, 
                        $reg_logradouro, 
                        $reg_numero, 
                        $reg_complemento, 
                        $reg_cep, 
                        $reg_bairro, 
                        $reg_cidade, 
                        $reg_estado, 
                        $reg_cnpj, 
                        $reg_inscricao_estadual, 
                        $reg_cnae, 
                        $reg_contato, 
                        $reg_telefone, 
                        $reg_email, 
                        $reg_pncebt, 
                        $reg_pncebt_telefone, 
                        $reg_pncebt_email){
        
//INSERINDO INFORMAÇÕES NO JOOMLA
        
//        $sql = "INSERT INTO portal_homologacao.jtec_integracao_joomla_crm_regionais(
//            id ,
//            uniq_id ,
//            user_id ,
//            created ,
//            modified ,
//            reg_razao_social ,
//            reg_nm_fantasia ,
//            reg_tp_logradouro ,
//            reg_logradouro ,
//            reg_numero ,
//            reg_complemento ,
//            reg_cep ,
//            reg_bairro ,
//            reg_cidade ,
//            reg_estado ,
//            reg_cnpj ,
//            reg_inscricao_estadual ,
//            reg_cnae ,
//            reg_contato ,
//            reg_telefone ,
//            reg_email ,
//            reg_pncebt
//            )
//            VALUES (
//            '" . date('Hisu') . "', 
//            '1',  
//            '1', 
//            '" . date('Y-m-d H:i:s') . "', 
//            '" . date('Y-m-d H:i:s') . "',    
//            '" . $reg_razao_social . "', 
//            '" . $reg_nm_fantasia . "', 
//            '" . $reg_tp_logradouro . "', 
//            '" . $reg_logradouro . "', 
//            '" . $reg_numero . "', 
//            '" . $reg_complemento . "', 
//            '" . $reg_cep . "', 
//            '" . $reg_bairro . "', 
//            '" . $reg_cidade . "', 
//            '" . $reg_estado . "', 
//            '" . $reg_cnpj . "', 
//            '" . $reg_inscricao_estadual . "', 
//            '" . $reg_cnae . "', 
//            '" . $reg_contato . "', 
//            '" . $reg_telefone . "', 
//            '" . $reg_email . "', 
//            '" . $reg_pncebt . "'
//            );";
//        
//        $result = mysql_query($sql);
        
//INSERINDO INFORMAÇÕES NO SUGAR
        
        $sql = "INSERT INTO homologacao_sugarcrm.ant_regionais(
            id,
            name,
            date_entered,
            date_modified,
            modified_user_id,
            created_by,
            description,
            deleted,
            assigned_user_id,
            reg_sec_id,
            reg_razao_social,
            reg_nm_fantasia,
            reg_tp_logradouro,
            reg_logradouro,
            reg_numero,
            reg_complemento,
            reg_bairro,
            reg_inscricao_estadual,
            reg_cnae,
            reg_contato,
            reg_email,
            reg_orgao_vinculado_pncebt,
            reg_cep,
            reg_cidade,
            reg_cnpj,
            reg_estado
            )
            VALUES (
                '" . date('ymdHis') . "',
                '" . $reg_nm_fantasia . "',
                '" . date('Y-m-d H:i:s') . "',
                '" . date('Y-m-d H:i:s') . "',
                '1',
                '1',
                '1',
                '0',
                '1',
                '" . $reg_id_sec . "',
                '" . $reg_razao_social . "',
                '" . $reg_nm_fantasia . "',
                '" . $reg_tp_logradouro . "',
                '" . $reg_logradouro . "',
                '" . $reg_numero . "',
                '" . $reg_complemento . "',
                '" . $reg_bairro . "',
                '" . $reg_inscricao_estadual . "',
                '" . $reg_cnae . "',
                '" . $reg_contato . "', 
                '" . $reg_email . "', 
                '" . $reg_pncebt . "',
                '" . $reg_cep . "',
                '" . $reg_cidade . "',
                '" . $reg_cnpj . "', 
                '" . $reg_estado . "'
            );";
        
            try {
                inserirDados($sql);
                
                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'Regional';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/cadastro-de-regionais';
                $_SESSION['msg_sucess'] = 'Regional cadastrada com sucesso.';

                return;
                
            } catch (Exception $e){
                echo '<pre>';
                    print_r($e->getMessage());
                echo '</pre>';

                exit();

            }
            
        }
    }

?>
