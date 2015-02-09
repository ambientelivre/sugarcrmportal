<?php

class pedido_veterinario_regionalDao {
    public $p = null;
    
    public function pedido_veterinario_regionalDao(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
    public function inserirPedido_veterinario_regional(
            $ped_nm_razao,
            $ped_quantidade, 
            $ped_desc_produto, 
            $ped_cod_prod,
            $ped_valor_total,
            $ped_status,
            $ped_reg_origem,
            $ped_sec_origem,
            $ped_nm_razao,
            $ped_lote,
            $ped_valor_unitario,
            $ped_reg_destino){
        
            $ped_cod_boleto = date('ymdHis');
               
////INSERINDO INFORMAÇÕES NO SUGAR
        $sql = "INSERT INTO homologacao_sugarcrm.ant_pedido(
            id,
            name,
            date_entered,
            date_modified,
            modified_user_id,
            created_by,
            description,
            deleted,
            assigned_user_id,
            ped_valor_total,
            ped_status,
            ped_codigo_boleto,
            ped_reg_origem,
            ped_sec_origem,
            ped_nm_razao,
            ped_reg_destino,
            ped_clie_destino,
            ped_data
            )
            VALUES (
                '" . date('ymdHis') . "',
                '" . $ped_nm_razao . "',
                '" . date('Y-m-d H:i:s') . "',
                '" . date('Y-m-d H:i:s') . "',
                '1', 
                '1', 
                '1', 
                '0', 
                '1', 
                '" . $ped_valor_total . "',
                '" . $ped_status . "',
                '" . $ped_cod_boleto . "',
                '" . $ped_reg_origem . "',
                '" . $ped_sec_origem . "',
                '" . $ped_nm_razao . "',
                '" . $ped_reg_destino . "',
                '" . $ped_nm_razao . "',
                '" . date('Y-m-d') . "'
                    
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
            
            
//INSERIR NA TABELA DE LISTA
            
        $i = 0;
        
        foreach($ped_cod_prod as $cod_prod){

            $sql = "INSERT INTO homologacao_sugarcrm.ant_lista_pedidos(
                id,
                name,
                date_entered,
                date_modified,
                modified_user_id,
                created_by,
                description,
                deleted,
                assigned_user_id,
                list_id_produto,
                list_quantidade,
                id_pedido,
                list_lote,
                list_val_un
                )VALUES(
                    '" . date('ymdHis') . $i ."',
                    '1',
                    '" . date('Y-m-d H:i:s') . "',
                    '" . date('Y-m-d H:i:s') . "',
                    '1', 
                    '1', 
                    '1', 
                    '0', 
                    '1', 
                    '" . $cod_prod . "',
                    '" . $ped_quantidade[$i] . "',
                    '" . $ped_cod_boleto . "',
                    '" . $ped_lote[$i] . "',
                    '" . $ped_valor_unitario[$i] . "'
            )";

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
        
        $_SESSION['ped_cod_boleto'] = $ped_cod_boleto;
        $_SESSION['sucess'] = true;
        $_SESSION['categoria'] = 'novo Pedido';
        $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/pedido-de-antigenos';
        $_SESSION['msg_sucess'] = 'Pedido realizado com sucesso.';

        return;
            
    }
        
        public function consultarDadosEstoque(){
            
            $sql = "SELECT * FROM homologacao_sugarcrm.ant_estoque_geral LIMIT 0 , 30";
            
            try {
                
                $retorno = consultarEstoque($sql);
                
                return $retorno; 
            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
        }
        
        public function alterarStatus($ped_cod){
            
            $sql = "UPDATE homologacao_sugarcrm.ant_pedido SET ped_status = 'Pago' WHERE ped_codigo_boleto = '" . $ped_cod . "'";
            
            try {
                $retorno = executarQuery($sql);
                
                return $retorno;
            }
            
            catch (Exception $e){
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
            
        }

        public function insereLog($ped_sec_origem, $ped_reg_origem, $ped_reg_destino, $ped_clie_destino,  $ped_qnt, $ped_prod,  $ped_lote, $ped_codigo_boleto){

            $i = 0;
            
            foreach($ped_qnt as $qnt){
                
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
                            log_reg_destino,
                            log_clie_dest,
                            log_codigo_boleto
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
                                '" . $ped_qnt[$i] . "', 
                                '" . $ped_lote[$i] . "',
                                '" . $ped_prod[$i] . "', 
                                '" . $ped_sec_origem . "', 
                                '" . $ped_reg_origem . "',
                                '" . $ped_reg_destino . "',
                                '" . $ped_clie_destino . "',
                                '" . $ped_codigo_boleto . "'
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
            
            return $retorno;
            
                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'Nova Pesquisa';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/pesquisar-boleto';
                $_SESSION['msg_sucess'] = 'Pesquisa realizada com sucesso.';
                    
        }
        
        public function atualizarEstoque($cod_prod, $quantidade,$sec_origem, $reg_origem, $lote){
            
            $i = 0;
            
            foreach($cod_prod as $id_prod){
                
                if($sec_origem != ''){
                    $sql = "SELECT * FROM homologacao_sugarcrm.ant_estoque_geral
                            WHERE eg_secretaria = '" . $sec_origem . "' AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $lote[$i] . "'";

                        try {
                            $retorno = executarQuery($sql);
                        }

                        catch(Exception $e){
                            echo '<pre>';
                            print_r($e->getMessage());
                            echo '</pre>';
                            exit();
                        }
                        
                    $retorno = mysql_fetch_array($retorno);
                    
                    if($retorno['id'] != ''){

                        $total = $retorno['eg_total'];                
                        $vt = $total - $quantidade[$i]; 

                        $sql = "UPDATE homologacao_sugarcrm.ant_estoque_geral SET eg_total = " . $vt ." WHERE eg_secretaria = '" . $sec_origem . "' AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $lote[$i] . "'"; 
                        
                        try{
                            $retorno = executarQuery($sql);
                        }

                        catch(Exception $e){
                            echo '<pre>';
                            print_r($e->getMessage());
                            echo '</pre>';
                            exit();
                        }

                    }else{
                        echo 'Devo inserir um novo registro, pois nada encontrei na tabela.</br> E o valor de $i = ' . $i ;
                        
                        // RESGATA INFORMAÇÕES MAIS COMPLETAS PARA FUTURA INSERÇÃO

                        $sql = "SELECT name, pd_descricao FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $id_prod . "'";
                        
                        try {
                            $retorno = executarQuery($sql);
                        }

                        catch(Exception $e) {
                            echo '<pre>';
                            print_r($e->getMessage());
                            echo '</pre>';
                            exit();
                        }
                        
                        $retorno = mysql_fetch_array($retorno);

                        $nome_prod = $retorno['name'];
                        $desc_prod = $retorno['pd_descricao'];

                        $qnt[$i] = 0 - $quantidade[$i];

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
                                '" . $lote[$i] . "',
                                '" . $qnt[$i] . "', 
                                '0',
                                '" . $sec_origem . "', 
                                NULL);";
                        
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

                }else if($reg_origem != ''){

                    $sql = "SELECT * FROM homologacao_sugarcrm.ant_estoque_geral
                            WHERE eg_regional = '" . $reg_origem . "' AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $lote[$i] . "'";
                    
                        try {
                            $retorno = executarQuery($sql);
                            
                        }

                        catch(Exception $e) {
                            echo '<pre>';
                            print_r($e->getMessage());
                            echo '</pre>';
                            exit();
                        }
                    
                    $retorno = mysql_fetch_array($retorno);
                                            
                    if($retorno['id'] != ''){
                        
                        $total = $retorno['eg_total'];                
                        $vt = $total - $quantidade[$i]; 
                                            
                        $sql = "UPDATE homologacao_sugarcrm.ant_estoque_geral SET eg_total = " . $vt ." WHERE eg_regional = '" . $reg_origem . "' AND eg_cod_prod = '" . $id_prod  . "' AND eg_lote = '" . $lote[$i] . "'"; 

                            try {
                                $retorno = executarQuery($sql);
                            }

                            catch(Exception $e) {
                                echo '<pre>';
                                print_r($e->getMessage());
                                echo '</pre>';
                                exit();
                            }
                        
                    }else{
                        
                        // RESGATA INFORMAÇÕES MAIS COMPLETAS PARA FUTURA INSERÇÃO
                        
                        $sql = "SELECT name, pd_descricao FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $id_prod . "'";

                            try {
                                $retorno = executarQuery($sql);
                            }

                            catch(Exception $e) {
                                echo '<pre>';
                                print_r($e->getMessage());
                                echo '</pre>';
                                exit();
                            }

                        $nome_prod = $retorno['name'];
                        $desc_prod = $retorno['pd_descricao'];
                                                
                        $qnt[$i] = 0 - $quantidade[$i];
                        
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
                                '" . $lote[$i] . "',
                                '" . $qnt[$i] . "', 
                                '" . $reg_origem . "', 
                                '0', 
                                NULL);";
                        
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
            $_SESSION['categoria'] = 'Confirmar Novo Boleto';
            $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/pesquisar-boleto';
            $_SESSION['msg_sucess'] = 'Boleto Confirmado com Sucesso.';
            
            return;

        }
        
    function pesquisaProduto($id_sec, $id_reg, $id_prod){
            $sql = "SELECT name FROM homologacao_sugarcrm.ant_secretarias WHERE id = " . $id_sec;
            
            $result = mysql_query($sql);
            
            while($l = mysql_fetch_array($result)){
                $sec_nome = $l['name'];
            }
            
            $sql = "SELECT name FROM homologacao_sugarcrm.ant_regionais WHERE id = " . $id_reg;
                        
            $result = mysql_query($sql);
            
            while($l = mysql_fetch_array($result)){
                $reg_nome = $l['name'];
            }
            
            $sql = "SELECT name FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $id_prod . "'";
            
            $result = mysql_query($sql);
            
            while($l = mysql_fetch_array($result)){
                $prod_nome = $l['name'];
            }
            
            $info = array();
            $info['secretaria'] = $sec_nome;
            $info['regional'] = $reg_nome;
            $info['produto'] = $prod_nome;
                        
            return $info;
    }
    
    function nmFiltro($id_sec_origem, $id_sec_destino, $id_reg_origem, $id_reg_destino, $clie_destino){
        if($id_sec_origem != ''){
            $sql = "SELECT sec_razao_social FROM homologacao_sugarcrm.ant_secretarias WHERE id = '" . $id_sec_origem . "'";
                
            try {
                $retorno = executarQuery($sql);
                
                while($l = mysql_fetch_array($retorno)){
                    $nm_filtro['f_sec_origem'] = $l['sec_razao_social'];
                }
            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
            
        }

        if($id_sec_destino != ''){

            $sql = "SELECT sec_razao_social FROM homologacao_sugarcrm.ant_secretarias WHERE id = '" . $id_sec_destino . "'";
                        
            try {
                $retorno = executarQuery($sql);
                
                while($l = mysql_fetch_array($retorno)){
                    $nm_filtro['f_sec_destino'] = $l['sec_razao_social'];
                }
            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
            
        }
        
        if($id_reg_origem != ''){
            $sql = "SELECT reg_razao_social FROM homologacao_sugarcrm.ant_regionais WHERE id = '" . $id_reg_origem . "'";
            
            try {
                $retorno = executarQuery($sql);
                
                while($l = mysql_fetch_array($retorno)){
                    $nm_filtro['f_reg_origem'] = $l['reg_razao_social'];
                }
            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
        }
        
        if($id_reg_destino != ''){
            $sql = "SELECT reg_razao_social FROM homologacao_sugarcrm.ant_regionais WHERE id = '" . $id_reg_destino . "'";
            
            try {
                $retorno = executarQuery($sql);
                
                while($l = mysql_fetch_array($retorno)){
                    $nm_filtro['f_reg_destino'] = $l['reg_razao_social'];
                }
            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
        }        
        
        if($clie_destino != ''){
            $sql = "SELECT name FROM homologacao_sugarcrm.ant_cliente WHERE id = '" . $clie_destino . "'";
            
            try {
                $retorno = executarQuery($sql);
                
                while($l = mysql_fetch_array($retorno)){
                    $nm_filtro['f_clie_destino'] = $l['name'];
                }
            }

            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
        }
        
        return $nm_filtro;

    }
    
    function relPedido($id_sec_origem, $id_reg_origem, $id_sec_destino, $id_reg_destino, $clie_destino, $status, $dt_inicio, $dt_fim){
        
        // CONVERTENDO DATA PARA EVITAR PROBLEMAS COM QUERY EM BANCO
        if($dt_inicio != ''){
            $dt_inicio = converte_data($dt_inicio);
        }

        if($dt_fim != ''){
            $dt_fim = converte_data($dt_fim);
        }

        // CONTROLE DO FILTRO SECRETARIA DE ORIGEM
        if($id_sec_origem != ''){
            $sec_origem = "AND ped.ped_sec_origem = '" . $id_sec_origem . "'";
        }

        // CONTROLE DO FILTRO SECRETARIA DE DESTINO
        if($id_sec_destino != ''){
            $sec_destino = "AND ped.ped_sec_destino = '" . $id_sec_destino . "'";
        }

        // CONTROLE DO FILTRO REGIONAL DE ORIGEM
        if($id_reg_origem != ''){
            $reg_origem = "AND ped.ped_reg_origem = '" . $id_reg_origem . "'";
        }

        // CONTROLE DO FILTRO REGIONAL DE DESTINO
        if($id_reg_destino != ''){
            $reg_destino = "AND ped.ped_reg_destino = '" . $id_reg_destino . "'";
        }

        // CONTROLE DO FILTRO CLIENTE DESTINO
        if($clie_destino != ''){
            $clie_destino = "AND ped.ped_clie_destino = '" . $clie_destino . "'";
        }

        //CONTROLE DO FILTRO LOTE
        if($status != ''){
            $status = "AND ped.ped_status = '" . $status . "'";
        }

        // CONTROLE DO FILTRO PERIODO
        if($dt_inicio != '' && $dt_fim != ''){
            $periodo = "AND ped.ped_data BETWEEN '" . $dt_inicio . "' AND '" . $dt_fim ."'";
        }else if($dt_inicio == '' && $dt_fim == ''){
            $periodo = "";
        }else if($dt_inicio != ''){
            $periodo = "AND ped.ped_data = '" . $dt_inicio . "'";
        }else{
            $periodo = "AND ped.ped_data = '" . $dt_fim . "'";
        }
        
            $sql = "SELECT ped.ped_valor_total,
                           ped.ped_status,
                           ped.ped_codigo_boleto,
                           ped.ped_data,
                        (SELECT reg.reg_razao_social FROM homologacao_sugarcrm.ant_regionais reg
                         WHERE reg.id = ped.ped_reg_origem) AS reg_origem, 
                        (SELECT reg.reg_razao_social FROM homologacao_sugarcrm.ant_regionais reg
                         WHERE reg.id = ped.ped_reg_destino) AS reg_destino, 
                        (SELECT sec.sec_razao_social FROM homologacao_sugarcrm.ant_secretarias sec
                         WHERE sec.id = ped.ped_sec_origem) AS sec_origem, 
                        (SELECT sec.sec_razao_social FROM homologacao_sugarcrm.ant_secretarias sec
                         WHERE sec.id = ped.ped_sec_destino) AS sec_destino, 
                        (SELECT cli.name FROM homologacao_sugarcrm.ant_cliente cli
                         WHERE cli.id = ped.ped_clie_destino) AS cliente_destino
                    FROM homologacao_sugarcrm.ant_pedido ped
                    WHERE 1 = 1 " . $sec_origem . 
                                    $sec_destino . 
                                    $reg_origem . 
                                    $reg_destino . 
                                    $clie_destino . 
                                    $status . 
                                    $periodo;

            try {
                $retorno = executarQuery($sql);
                
                $i = 0;
                
                while($l = mysql_fetch_array($retorno)){
                    $rel_pedido[$i]['sec_origem'] = $l['sec_origem'];
                    $rel_pedido[$i]['sec_destino'] = $l['sec_destino'];
                    $rel_pedido[$i]['reg_origem'] = $l['reg_origem'];
                    $rel_pedido[$i]['reg_destino'] = $l['reg_destino'];
                    $rel_pedido[$i]['data'] = $l['ped_data'];
                    $rel_pedido[$i]['cliente_destino'] = $l['cliente_destino'];
                    $rel_pedido[$i]['ped_codigo_boleto'] = $l['ped_codigo_boleto'];
                    $rel_pedido[$i]['ped_status'] = $l['ped_status'];
                    $rel_pedido[$i]['ped_valor_total'] = $l['ped_valor_total'];

                    $i++;
                }

                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'Relatório de Pedidos';
                $_SESSION['msg_sucess'] = 'RELATÓRIO DE PEDIDOS.';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/rel-pedidos';

                utf8_encode($rel_pedido);
                
                return $rel_pedido;
                
            }
            
            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
        
        exit();
        
    }
 
}