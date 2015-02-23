<?php

class produtos_inutilizadosDAO {
    public $p = null;
    
    public function produtos_inutilizadosDAO(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }

    public function inserirProdutos_inutilizados(
            $in_data,
            $in_secretaria, 
            $in_regionais, 
            $in_motivo, 
            $in_observacoes, 
            $in_produto, 
            $in_lote, 
            $in_qnt,  
            $in_nome,
            $val_unit){
        
    $in_data = converte_data($in_data);
        
//INSERINDO INFORMAÇÕES NO JOOMLA
        
//        $sql = "INSERT INTO portal_homologacao.jtec_integracao_joomla_crm_secretarias(
//            id ,
//            name,
//            date_entered,
//            date_modified,
//            modified_user_id,
//            created_by,
//            description,
//            deleted,
//            assigned_user_id,
//            in_data,
//            in_secretaria,
//            in_regionais,
//            in_motivo,
//            in_observacoes,
//            in_produto,
//            in_lote,
//            in_qt,
//            in_nome)
//            VALUES (
//            '" . date('His') . "',
//            '" . $in_nome . "',
//            '" . date('Y-m-d H:i:s') . "',
//            '" . date('Y-m-d H:i:s') . "',
//            '1', 
//            '1', 
//            '1', 
//            '0', 
//            '1', 
//            '" . $in_data . "', 
//            '" . $in_secretaria . "', 
//            '" . $in_regionais . "', 
//            '" . $in_motivo . "', 
//            '" . $in_observacoes . "', 
//            '" . $in_produto . "', 
//            '" . $in_lote . "', 
//            '" . $in_qnt . "',
//            '" . $in_nome . "'
//            );";
//        
//        $result = mysql_query($sql);
        
//INSERINDO INFORMAÇÕES NO SUGAR
        
    $in_id_ocorrencia = date('ymdHisB');
    
        $sql = "INSERT INTO homologacao_sugarcrm.ant_inutilizado(
        id ,
        name,
        date_entered,
        date_modified,
        modified_user_id,
        created_by,
        description,
        deleted,
        assigned_user_id,
        in_data,
        in_secretaria,
        in_regionais,
        in_motivo,
        in_observacoes,
        in_produto,
        in_lote,
        in_qt,
        in_nome,
        in_id_ocorrencia)
        VALUES (
        '" . $in_id_ocorrencia . "',
        '" . $in_nome[$i] . "',
        '" . date('Y-m-d H:i:s') . "',
        '" . date('Y-m-d H:i:s') . "',
        '1', 
        '1', 
        '1', 
        '0', 
        '1', 
        '" . $in_data . "', 
        '" . $in_secretaria . "', 
        '" . $in_regionais . "', 
        '" . $in_motivo . "', 
        '" . $in_observacoes . "', 
        '', 
        '', 
        '',
        '',
        '" . $in_id_ocorrencia . "'
        );";

        try {
            inserirDados($sql);

        }

        catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
        
        $i = 0;
        
        foreach($in_produto as $id_produto){
            
            $sql = "INSERT INTO homologacao_sugarcrm.ant_itens_inutilizados(
                    	id,
                        name,
                        date_entered,
                        date_modified,
                        modified_user_id,
                        created_by,
                        description,
                        deleted,
                        assigned_user_id,
                        inlist_id_prod_inut,
                        inlist_qnt,
                        inlist_lote,
                        inlist_val_unit,
                        in_id_ocorrencia)
                    VALUES(
                        '" . $in_id_ocorrencia . $i . "',
                        '" . $in_nome[$i] . "',
                        '" . date('Y-m-d H:i:s') . "',
                        '" . date('Y-m-d H:i:s') . "',
                        '1', 
                        '1', 
                        '1', 
                        '0', 
                        '1', 
                        '" . $id_produto . "',
                        '" . $in_qnt[$i] . "',
                        '" . $in_lote[$i] . "', 
                        '" . $val_unit[$i] . "',
                        '" . $in_id_ocorrencia . "'
                    );";
            
            try {
                inserirDados($sql);

            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
            
            $i++;
        }

        $_SESSION['sucess'] = true;
        $_SESSION['categoria'] = 'Produto Inutilizado';
        $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/produtos-inutilizados';
        $_SESSION['msg_sucess'] = 'Produto Inutilizado registrado com sucesso.';
        $_SESSION['id_ocorrencia'] = $in_id_ocorrencia; 
        
    }
    
    public function insereLog($in_qnt, $in_lote, $in_produto, $in_sec_origem, $in_reg_origem){
        
        $i = 0;
            
            foreach($in_qnt as $qnt){
                
                $sql = "INSERT INTO homologacao_sugarcrm.ant_log_estoque(
                            id,
                            name,
                            date_entered,
                            date_modified,
                            modified_user_id,
                            created_by,
                            description,
                            deleted,
                            assigned_user_id,
                            log_data,
                            log_qtd,
                            log_lote,
                            log_prod,
                            log_sec_origem,
                            log_reg_origem,
                            log_tecpar
                            ) VALUES (
                                '" . date('ymdHisB' . $i) . "',
                                'ADMIN',
                                '" . date('Y-m-d H:i:s') . "',
                                '" . date('Y-m-d H:i:s') . "',
                                '1', 
                                '1', 
                                '1', 
                                '0', 
                                '1', 
                                '" . date('Y-m-d') . "',
                                '" . $qnt[$i] . "', 
                                '" . $in_lote[$i] . "',
                                '" . $in_produto[$i] . "', 
                                '" . $in_sec_origem . "', 
                                '" . $in_reg_origem . "',
                                '1'
                            );";

                try {
                    $retorno = executarQuery($sql);

                }

                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                $i++;
            }
        
    }
    
        public function atualizarEstoque( $in_qnt, $in_lote, $in_produto, $in_sec_origem, $in_reg_origem){
            
            $i = 0;
            
            foreach($in_produto as $id_prod){
                            
                if($in_sec_origem != ''){
                    $sql = "SELECT * FROM homologacao_sugarcrm.ant_estoque_geral
                            WHERE eg_secretaria = " . $in_sec_origem . " AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $in_lote[$i] . "'";

                    $result = mysql_query($sql);

                    if(!empty($result)){
                        $l = mysql_fetch_array($result);

                        if($l['id'] != ''){

                            $total = $l['eg_total'];                
                            $vt = $total - $in_qnt[$i]; 

                            $sql = "UPDATE homologacao_sugarcrm.ant_estoque_geral SET eg_total = " . $vt ." WHERE eg_secretaria = " . $in_sec_origem . " AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $in_lote[$i] . "'"; 

                        } else {

                            // REGATA INFORMAÇÕES MAIS COMPLETAS PARA FUTURA INSERÇÃO

                            $sql = "SELECT name, pd_descricao FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $id_prod . "'";
                            $result = mysql_query($sql);
                            $l = mysql_fetch_array($result);

                            $nome_prod = $l['name'];
                            $desc_prod = $l['pd_descricao'];

                            $qnt[$i] = 0 - $in_qnt[$i];

                            $sql = "INSERT INTO homologacao_sugarcrm.ant_estoque_geral (
                                    id, 
                                    name, 
                                    date_entered, 
                                    date_modified, 
                                    modified_user_id, 
                                    created_by, 
                                    description, 
                                    deleted, 
                                    assigned_user_id, 
                                    eg_cod_prod, 
                                    eg_lote, 
                                    eg_total, 
                                    eg_regional, 
                                    eg_secretaria, 
                                    eg_qtd) VALUES (
                                    '" . date('ymdHisB' . $i) . "',
                                    '" . $nome_prod . "', 
                                    NULL, 
                                    NULL, 
                                    NULL, 
                                    NULL, 
                                    '" . $desc_prod . "', 
                                    '0', 
                                    NULL,  
                                    '" . $id_prod . "', 
                                    '" . $in_lote[$i] . "',
                                    '" . $qnt[$i] . "',
                                    '0', 
                                    '" . $in_sec_origem . "', 
                                    NULL);";
                            
                        }
                        
                    }                    
                    
                    try {
                        $retorno = executarQuery($sql);
                    }

                    catch(Exception $e) {
                        echo '<pre>';
                        print_r($e->getMessage());
                        echo '</pre>';
                        exit();
                    }

                }else if($in_reg_origem != ''){

                    $sql = "SELECT * FROM homologacao_sugarcrm.ant_estoque_geral
                            WHERE eg_regional = " . $in_reg_origem . " AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $in_lote[$i] . "'";

                    $result = mysql_query($sql);

                    if(!empty($result)){
                        $l = mysql_fetch_array($result);

                        if($l['id'] != ''){

                            $total = $l['eg_total'];                
                            $vt = $total - $in_qnt[$i]; 

                            $sql = "UPDATE homologacao_sugarcrm.ant_estoque_geral SET eg_total = " . $vt ." WHERE eg_regional = " . $in_reg_origem . " AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $in_lote[$i] . "'"; 

                        } else {

                            // RESGATA INFORMAÇÕES MAIS COMPLETAS PARA FUTURA INSERÇÃO

                            $sql = "SELECT name, pd_descricao FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $id_prod . "'";
                            $result = mysql_query($sql);
                            $l = mysql_fetch_array($result);

                            $nome_prod = $l['name'];
                            $desc_prod = $l['pd_descricao'];

                            $qnt[$i] = 0 - $in_qnt[$i];

                            $sql = "INSERT INTO homologacao_sugarcrm.ant_estoque_geral (
                                    id, 
                                    name, 
                                    date_entered, 
                                    date_modified, 
                                    modified_user_id, 
                                    created_by, 
                                    description, 
                                    deleted, 
                                    assigned_user_id, 
                                    eg_cod_prod, 
                                    eg_lote, 
                                    eg_total, 
                                    eg_regional, 
                                    eg_secretaria, 
                                    eg_qtd) VALUES (
                                    '" . date('ymdHisB' . $i) . "',
                                    '" . $nome_prod . "', 
                                    NULL, 
                                    NULL, 
                                    NULL, 
                                    NULL, 
                                    '" . $desc_prod . "', 
                                    '0', 
                                    NULL,  
                                    '" . $id_prod . "', 
                                    '" . $in_lote[$i] . "',
                                    '" . $qnt[$i] . "',
                                    '" . $in_reg_origem . "', 
                                    '0', 
                                    NULL);";

                        }

                        try {
                            $retorno = executarQuery($sql);
                        }

                        catch(Exception $e) {
                            echo '<pre>';
                            print_r($e->getMessage());
                            echo '</pre>';
                            exit();
                        }   
                    }   
                }
                $i++;   
            }
            
            
            $_SESSION['sucess'] = true;
            $_SESSION['categoria'] = 'Produto(s) Inutilizado(s)';
            $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/produtos-inutilizados';
            $_SESSION['msg_sucess'] = 'Produto(s) inutilizado(s) registrado(s) com sucesso.';
            return;
        }
        
        public function gerarRelatorio($sec_or, $reg_or, $sec_des, $reg_des, $produto, $lote, $data){

            $sql = "SELECT date_format( le.log_data, '%d/%m/%Y' ) AS 'DATA',
                    le.log_qtd AS 'QTD',
                    le.log_lote AS 'LOTE',
                    pd.pd_nome AS 'PRODUTO',
                    le.log_codigo_boleto AS 'BOLETO',
                    (select so.sec_razao_social from homologacao_sugarcrm.ant_secretarias so where le.log_sec_origem = so.id) AS 'SEC_OR',
                    (select sd.sec_razao_social from homologacao_sugarcrm.ant_secretarias sd where le.log_sec_destino = sd.id) AS 'SEC_DEST',
                    (select ro.reg_razao_social from homologacao_sugarcrm.ant_regionais ro where le.log_reg_origem = ro.id) AS 'REG_OR',
                    (select rd.reg_razao_social from homologacao_sugarcrm.ant_regionais rd where le.log_reg_destino = rd.id) AS 'REG_DEST'
                    FROM homologacao_sugarcrm.ant_log_estoque le
                    INNER JOIN homologacao_sugarcrm.ant_produto pd ON ( le.log_prod = pd.id )
                    WHERE 1".$produto.$lote.$data.$sec_or.$reg_or.$sec_des.$reg_des;
            
                    $result = mysql_query($sql);

                    $lg = array();
                    $lg1 = array();
                    $i = 0;

                    while($l = mysql_fetch_array($result)){
                        $lg1['DATA'] = $l['DATA'];
                        $lg1['PRODUTO'] = $l['PRODUTO'];
                        $lg1['LOTE'] = $l['LOTE'];
                        $lg1['QTD'] = $l['QTD'];
                        $lg1['SEC_OR'] = $l['SEC_OR'];
                        $lg1['SEC_DEST'] = $l['SEC_DEST'];
                        $lg1['REG_OR'] = $l['REG_OR'];
                        $lg1['REG_DEST'] = $l['REG_DEST'];
                        $lg[$i] = $lg1;
                        $i++;
                    }
                    
                    $_SESSION['sucess'] = true;
                    $_SESSION['categoria'] = 'Relatório de Estoque';
                    $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/relatorio-estoque';
                    $_SESSION['msg_sucess'] = "<font face='Verdana, Arial' size='5'> Impresso em: " . date("d/m/Y h:i:s") . "    &nbsp;Registros encontrados : ".$i."</font>";
                    
                    return $lg;
                    
        }
        
        function pesquisaProduto($id_sec, $id_reg, $id_prod){
            
            
            $sql = "SELECT sec_razao_social, sec_cidade, sec_cord_est_nome coordenador, sec_cnpj FROM homologacao_sugarcrm.ant_secretarias WHERE id = '" . $id_sec . "'";
            
            $result = mysql_query($sql);
            
            while($l = mysql_fetch_array($result)){
                $info_sec['nm_sec'] = $l['sec_razao_social'];
                $info_sec['sec_cidade'] = $l['sec_cidade'];
                $info_sec['coordenador'] = $l['coordenador'];
                $info_sec['sec_cnpj'] = $l['sec_cnpj'];
            }
            
            $sql = "SELECT reg.reg_razao_social nm_reg, reg_cidade, sec.name nm_sec, sec.sec_cnpj, sec.sec_cord_est_nome coordenador
                    FROM homologacao_sugarcrm.ant_regionais reg
                    INNER JOIN homologacao_sugarcrm.ant_secretarias sec ON sec.id = reg.reg_sec_id
                    WHERE reg.id = '" . $id_reg . "'";
            
            $result = mysql_query($sql);
            
            while($l = mysql_fetch_array($result)){
                $info_reg['nm_sec'] = $l['nm_sec'];
                $info_reg['nm_reg'] = $l['nm_reg'];
                $info_reg['reg_cidade'] = $l['reg_cidade'];
                $info_reg['coordenador'] = $l['coordenador'];
                $info_reg['sec_cnpj'] = $l['sec_cnpj'];
            }
            
            $i = 0;
            foreach ($id_prod as $prod){
                $sql = "SELECT name FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $prod . "'";

                $result = mysql_query($sql);

                while($l = mysql_fetch_array($result)){
                    $prod_nome[$i] = $l['name'];
                }                
                $i++;
            }

            
            $info = array();
            
            if($info_sec['sec_cidade'] != ''){
                $cidade = $info_sec['sec_cidade'];
            }else{
                $cidade = $info_reg['reg_cidade'];
            }
            
            if($info_sec['nm_sec'] != ''){
                $info['secretaria'] = $info_sec['nm_sec'];
            }else{
                $info['secretaria'] = $info_reg['nm_sec'];
            }
            
            if($info_sec['sec_cnpj'] != ''){
                $info['sec_cnpj'] = $info_sec['sec_cnpj'];
            }else{
                $info['sec_cnpj'] = $info_reg['sec_cnpj'];
            }
            
            if($info_sec['coordenador'] != ''){
                $info['coordenador'] = $info_sec['coordenador'];
            }else{
                $info['coordenador'] = $info_reg['coordenador'];
            }
            
            $info['regional'] = $info_reg['nm_reg'];
            $info['cidade'] = $cidade;
            $info['produto'] = $prod_nome;
            
            
            return $info;
        }
        
}

?>
