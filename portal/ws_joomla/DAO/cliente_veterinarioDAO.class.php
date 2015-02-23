<?php

class cliente_veterinarioDao {
    public $p = null;
    
    public function cliente_veterinarioDao(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
        public function inserirCliente_veterinario(
                        $cli_sec,
                        $cli_reg,
                        $cli_nm_razao,
                        $cli_nm_fantasia, 
                        $cli_tp_logradouro, 
                        $cli_logradouro, 
                        $cli_numero, 
                        $cli_complemento, 
                        $cli_cep, 
                        $cli_bairro, 
                        $cli_cidade, 
                        $cli_estado, 
                        $cli_cnpj_cpf, 
                        $cli_contato, 
                        $cli_telefone, 
                        $cli_email, 
                        $cli_crmv,
                        $cli_pncebt){
        
//INSERINDO INFORMAÇÕES NO JOOMLA
        
//        $sql = "INSERT INTO joomla_diego.t7q2p_jtec_cliente_veterinario_tecpar(
//            id ,
//            uniq_id ,
//            user_id ,
//            created ,
//            modified ,
//            cli_nm_razao,
//            cli_nm_fantasia ,
//            cli_tp_logradouro ,
//            cli_logradouro ,
//            cli_numero ,
//            cli_complemento ,
//            cli_cep ,
//            cli_bairro ,
//            cli_cidade ,
//            cli_estado ,
//            cli_cnpj_cpf ,
//            cli_inscricao_estadual ,
//            cli_contato ,
//            cli_telefone ,
//            cli_email ,
//            cli_crmv ,
//            cli_regional ,
//            cli_pncebt ,
//            cli_situacao 
//            )
//            VALUES (
//            '" . date('His') . "', 
//            '1',  
//            '1', 
//            '" . date('Y-m-d H:i:s') . "', 
//            '" . date('Y-m-d H:i:s') . "',    
//            '" . $cli_nm_razao . "', 
//            '" . $cli_nm_fantasia . "', 
//            '" . $cli_tp_logradouro . "', 
//            '" . $cli_logradouro . "', 
//            '" . $cli_numero . "', 
//            '" . $cli_complemento . "', 
//            '" . $cli_cep . "', 
//            '" . $cli_bairro . "', 
//            '" . $cli_cidade . "', 
//            '" . $cli_estado . "', 
//            '" . $cli_cnpj_cpf . "', 
//            '" . $cli_inscricao_estadual . "', 
//            '" . $cli_contato . "', 
//            '" . $cli_telefone . "', 
//            '" . $cli_email . "', 
//            '" . $cli_crmv . "', 
//            '" . $cli_regional . "', 
//            '" . $cli_pncebt . "', 
//            '" . $cli_situacao . "'
//            );";
//        
//        $result = mysql_query($sql);
        
//INSERINDO INFORMAÇÕES NO SUGAR
        
        $sql = "INSERT INTO homologacao_sugarcrm.ant_cliente(
            id,
            name,
            date_entered,
            date_modified,
            modified_user_id,
            created_by,
            description,
            deleted,
            assigned_user_id,
            cli_sec,
            cli_reg,
            cli_razao_social,
            cli_nm_fantasia,
            cli_cep,    
            cli_cidade,
            cli_estado,
            cli_email,
            cli_cnpj_cpf,
            cli_logradouro,
            cli_numero,
            cli_complemento,
            cli_bairro,
            cli_contato,
            cli_telefone,
            cli_tp_logradouro,
            cli_crmv,
            cli_pncebt
            )
            VALUES (
                '" . date('HisB') . "',
                '" . $cli_nm_fantasia . "', 
                '" . date('Y-m-d H:i:s') . "',
                '" . date('Y-m-d H:i:s') . "',
                '1', 
                '1', 
                '1', 
                '0', 
                '1', 
                '" . $cli_sec . "', 
                '" . $cli_reg . "', 
                '" . $cli_nm_razao . "', 
                '" . $cli_nm_fantasia . "', 
                '" . $cli_cep . "', 
                '" . $cli_cidade . "',
                '" . $cli_estado . "', 
                '" . $cli_email . "', 
                '" . $cli_cnpj_cpf . "', 
                '" . $cli_logradouro . "', 
                '" . $cli_numero . "', 
                '" . $cli_complemento . "', 
                '" . $cli_bairro . "', 
                '" . $cli_contato . "', 
                '" . $cli_telefone . "',
                '" . $cli_tp_logradouro . "',
                '" . $cli_crmv . "',
                '" . $cli_pncebt . "'
            );"; 
        
            try {
                
                inserirDados($sql);

                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'Cliente/Veterinário';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/cliente';
                $_SESSION['msg_sucess'] = 'Cliente/Veterinário cadastrado(a) com sucesso.';
                
                return;
                
            } catch(Exception $e) {

                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                
                exit();
            }
        
        }
        
        public function buscaCliente($cliente){
            
        $sql = "SELECT * FROM homologacao_sugarcrm.ant_cliente WHERE id = " . $cliente;
        
        try {
            $retorno = executarQuery($sql);
            
            while($l = mysql_fetch_array($retorno)){
                $cli['ativo'] = $l['deleted'];
                $cli['id'] = $l['id'];
                $cli['nome'] = $l['name'];
                $cli['cli_sec'] = $l['cli_sec'];
                $cli['cli_reg'] = $l['cli_reg'];
                $cli['cli_razao'] = $l['cli_razao_social'];
                $cli['cli_nm_fantasia'] = $l['cli_nm_fantasia'];
                $cli['cep'] = $l['cli_cep'];
                $cli['cli_cidade'] = $l['cli_cidade'];
                $cli['cli_estado'] = $l['cli_estado'];
                $cli['cli_email'] = $l['cli_email'];
                $cli['cli_cnpj_cpf'] = $l['cli_cnpj_cpf'];
                $cli['cli_logradouro'] = $l['cli_logradouro'];
                $cli['cli_numero'] = $l['cli_numero'];
                $cli['cli_bairro'] = $l['cli_bairro'];
                $cli['cli_contato'] = $l['cli_contato'];
                $cli['cli_telefone'] = $l['cli_telefone'];
                $cli['cli_tp_logradouro'] = $l['cli_tp_logradouro'];
                $cli['cli_complemento'] = $l['cli_complemento'];
                $cli['cli_crmv'] = $l['cli_crmv'];
                $cli['cli_pncebt'] = $l['cli_pncebt'];
                $cli['chave'] = $l['U'];
            }
                
            echo json_encode($cli);
            
        }
        
        catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
    }
    
    public function alterarCliente($cliente,$ativo) {
        
        $sql = "UPDATE homologacao_sugarcrm.ant_cliente 
                SET deleted = '" . $ativo . "',
                    cli_razao_social = '" . $cliente->getCli_nm_razao() . "',
                    cli_nm_fantasia = '" . $cliente->getCli_nm_fantasia() . "',
                    cli_cep = '" . $cliente->getCli_cep() . "',    
                    cli_cidade = '" . $cliente->getCli_cidade() . "',
                    cli_estado = '" . $cliente->getCli_estado() . "',
                    cli_email = '" . $cliente->getCli_email() ."',
                    cli_cnpj_cpf = '" . $cliente->getCli_cnpj_cpf() . "',
                    cli_logradouro = '" . $cliente->getCli_logradouro() . "',
                    cli_numero = '" . $cliente->getCli_numero() . "',
                    cli_bairro = '" . $cliente->getCli_bairro() . "',
                    cli_contato = '" . $cliente->getCli_contato() . "',
                    cli_telefone = '" . $cliente->getCli_telefone() . "',
                    cli_tp_logradouro = '" . $cliente->getCli_tp_logradouro() . "',
                    cli_crmv = '" . $cliente->getCli_crmv() . "',
                    cli_pncebt = '" . $cliente->getCli_pncebt() . "' 
                WHERE id = " . $cliente->getCli_id();
        
        try {
            
            $retorno = executarQuery($sql);
            
            $_SESSION['sucess'] = true;
            $_SESSION['categoria'] = 'Cliente/Veterinário';
            $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/pesquisa-veterinario';
            $_SESSION['msg_sucess'] = 'Cliente/Veterinário alterado(a) com sucesso.';
            $_SESSION['alterar'] = true;
            
            include_once '../msg.php';
            
            exit();
            
        }
        
        catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
        
    }
}

?>