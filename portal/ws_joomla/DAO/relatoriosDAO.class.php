<?php

class relatoriosDAO{
    public $p = null;
    
    public function relatoriosDAO(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
    function geraRelatorioLog($sec_origem, $reg_origem, $sec_destino, $reg_destino, $produto, $lote, $data){
        
            $sql = "SELECT
                        (SELECT sec.sec_razao_social
                            FROM homologacao_sugarcrm.ant_secretarias sec
                            WHERE sec.id = log.log_sec_origem
                        ) AS sec_origem,
                        
                        (SELECT sec.sec_razao_social
                            FROM homologacao_sugarcrm.ant_secretarias sec
                            WHERE sec.id = log.log_sec_destino
                        ) AS sec_destino,
                        
                        (SELECT reg.reg_razao_social
                        FROM homologacao_sugarcrm.ant_regionais reg
                        WHERE reg.id = log.log_reg_origem) AS reg_origem,
                        
                        (SELECT reg.reg_razao_social
                        FROM homologacao_sugarcrm.ant_regionais reg
                        WHERE reg.id = log.log_reg_destino) AS reg_destino,
                        
                        (SELECT ped.id FROM homologacao_sugarcrm.ant_pedido ped
                        WHERE ped.id = log.log_codigo_boleto) AS cod_boleto,
                        
                        (SELECT prod.name FROM homologacao_sugarcrm.ant_produto prod
                        WHERE prod.id = log.log_prod) AS produto,
                        
                        (SELECT clie.name FROM homologacao_sugarcrm.ant_cliente clie
                        WHERE clie.id = log.log_clie_dest) AS cliente,
                        
                        log.log_lote, log.log_qtd, log.log_data
                        FROM homologacao_sugarcrm.ant_log_estoque log
                    WHERE 1 = 1 " . $sec_origem . $reg_origem . $sec_destino . $reg_destino . $produto . $lote . $data;

            try {
                
                $retorno = executarQuery($sql);
                
                $i = 0;
                
                while($l = mysql_fetch_array($retorno)){
                    $rel_log[$i]['sec_origem'] = $l['sec_origem'];
                    $rel_log[$i]['sec_destino'] = $l['sec_destino'];
                    $rel_log[$i]['reg_origem'] = $l['reg_origem'];
                    $rel_log[$i]['reg_destino'] = $l['reg_destino'];
                    $rel_log[$i]['cliente'] = $l['cliente'];
                    $rel_log[$i]['produto'] = $l['produto'];
                    $rel_log[$i]['lote'] = $l['log_lote'];
                    $rel_log[$i]['qtd'] = $l['log_qtd'];
                    $rel_log[$i]['data'] = converte_data_BR($l['log_data']);
                    
                    $i++;
                
                }

                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'RELATÓRIO DE HISTÓRICO';
                $_SESSION['msg_sucess'] = 'RELATÓRIO DE HISTÓRICO.';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/relatorio-estoque';
                $_SESSION['cabecalho'] = "<font face='Verdana, Arial' size='5'> Impresso em: " . date("d/m/Y h:i:s") . "    &nbsp;Registros encontrados : ".$i."</font>";

                return $rel_log;

            }
            
            catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
            
            exit();
        
    }
    
    function geraFiltro($filtro){
        
            if($filtro['sec_origem'] != ''){
                $sql = "SELECT sec.sec_razao_social sec_origem
                            FROM homologacao_sugarcrm.ant_secretarias sec
                        WHERE sec.id = '" . $filtro['sec_origem'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['sec_origem'] = $l['sec_origem'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }

            if($filtro['secretaria'] != ''){
                $sql = "SELECT sec.sec_razao_social secretaria
                            FROM homologacao_sugarcrm.ant_secretarias sec
                        WHERE sec.id = '" . $filtro['secretaria'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['sec_origem'] = $l['secretaria'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }

            if($filtro['sec_destino'] != ''){
                $sql = "SELECT sec.sec_razao_social sec_destino
                            FROM homologacao_sugarcrm.ant_secretarias sec
                        WHERE sec.id = '" . $filtro['sec_destino'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['sec_destino'] = $l['sec_destino'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }

            if($filtro['reg_origem'] != ''){
                
                $sql = "SELECT reg.reg_razao_social reg_origem
                            FROM homologacao_sugarcrm.ant_regionais reg
                        WHERE '" . $filtro['reg_origem'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['reg_origem'] = $l['reg_origem'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }
            
            if($filtro['regionais'] != ''){
                
                $sql = "SELECT reg.reg_razao_social regionais
                            FROM homologacao_sugarcrm.ant_regionais reg
                        WHERE '" . $filtro['regionais'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['reg_origem'] = $l['regionais'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }
            
            if($filtro['regional'] != ''){
                
                $sql = "SELECT reg.reg_razao_social regional
                            FROM homologacao_sugarcrm.ant_regionais reg
                        WHERE '" . $filtro['regional'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['reg_origem'] = $l['regional'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }

            if($filtro['reg_destino'] != ''){
                
                $sql = "SELECT reg.reg_razao_social reg_destino
                            FROM homologacao_sugarcrm.ant_regionais reg
                        WHERE '" . $filtro['reg_destino'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['reg_destino'] = $l['reg_destino'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }

            if($filtro['cliente'] != ''){
                
                $sql = "SELECT clie.name cliente FROM homologacao_sugarcrm.ant_cliente clie
                        WHERE clie.id = '" . $filtro['cliente'] . "'";

                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['cliente'] = $l['cliente'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }

            if($filtro['produto'] != ''){
                
                $sql = "SELECT prod.name FROM homologacao_sugarcrm.ant_produto prod
                        WHERE prod.id = '" . $filtro['produto'] . "'";
                
                try {

                    $retorno = executarQuery($sql);

                    while($l = mysql_fetch_array($retorno)){
                        $filtro['produto'] = $l['name'];

                    }

                }
            
                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }
            
            return $filtro;
        
    }
    
    function relInut($secretaria, $regional, $produto, $lote, $periodo){
        
        $sql = "SELECT inut.id, inut.in_motivo, inut.in_id_ocorrencia,

                    (SELECT sec.sec_razao_social
                        FROM homologacao_sugarcrm.ant_secretarias sec
                     WHERE sec.id = inut.in_secretaria ) AS secretaria, 
                     
                    (SELECT reg.reg_razao_social
                        FROM homologacao_sugarcrm.ant_regionais reg
                     WHERE reg.id = inut.in_regionais) AS regional, 

                        inut.in_data
                        FROM homologacao_sugarcrm.ant_inutilizado inut
                        
                WHERE 1 = 1 " . $secretaria . $regional . $periodo;
        
        try{
            $retorno = executarQuery($sql);

                $i = 0;

                while($l = mysql_fetch_array($retorno)){
                    
                    $rel_inut[$i]['id'] = $l['id'];
                    $rel_inut[$i]['motivo'] = $l['in_motivo'];
                    $rel_inut[$i]['secretaria'] = $l['secretaria'];
                    $rel_inut[$i]['regional'] = $l['regional'];    
                    $rel_inut[$i]['data'] = $l['in_data'];
                    $rel_inut[$i]['in_id_ocorrencia'] = $l['in_id_ocorrencia']; 
                    
                    if($l['in_id_ocorrencia'] != ''){
                        $sql2 = "SELECT inlist_qnt quantidade, inlist_lote lote, in_id_ocorrencia,
                                    (SELECT prod.name 
                                        FROM homologacao_sugarcrm.ant_produto prod
                                     WHERE prod.id = list.inlist_id_prod_inut) AS produto
                                    FROM homologacao_sugarcrm.ant_itens_inutilizados list
                                WHERE 1 = 1 AND list.in_id_ocorrencia = " . $rel_inut[$i]['in_id_ocorrencia'] . " ;"; 

                        $retorno2 = executarQuery($sql2);

                        $j= 0;
                        while($m = mysql_fetch_array($retorno2)){
                            $rel_list_inut[$j]['produto'] = $m['produto'];
                            $rel_list_inut[$j]['inlist_qnt'] = $m['quantidade'];
                            $rel_list_inut[$j]['inlist_lote'] = $m['lote'];
                            $rel_list_inut[$j]['id_ocorrencia'] = $m['in_id_ocorrencia'];
                            $j++;
                        }                         
                    }

                                  
                    $rel_inut[$i]['lista'] = $rel_list_inut;
 
                    unset($rel_list_inut);
                    
                    $i++;
                    
                }
                
        } catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
        
        $_SESSION['sucess'] = true;
        $_SESSION['categoria'] = 'Produto(s) Inutilizado(s)';
        $_SESSION['msg_sucess'] = 'RELATÓRIO DE INUTILIZADOS.';
        $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/relatorio-estoque';
        $_SESSION['cabecalho'] = "<font face='Verdana, Arial' size='5'> Impresso em: " . date("d/m/Y h:i:s") . "    &nbsp;Registros encontrados : ".$i."</font>";
        
        return $rel_inut;
        exit();    
    }
    
    function relPedido($sec_origem, $reg_origem, $sec_destino, $reg_destino, $clie_destino, $status, $periodo){

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
                $_SESSION['msg_sucess'] = 'RELAT&Oacute;RIO DE PEDIDOS.';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/rel-pedidos';
                $_SESSION['cabecalho'] = "<font face='Verdana, Arial' size='5'> Impresso em: " . date("d/m/Y h:i:s") . "    &nbsp;Registros encontrados : ".$i."</font>";
                
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
    
    public function gerarRelatorio($secretaria, $regional, $produto, $lote){
        
        $sql = "SELECT 
                 (SELECT prod.name 
                    FROM homologacao_sugarcrm.ant_produto prod
                  WHERE prod.id = eg.eg_cod_prod ) AS produto,";
                  
        if($secretaria != ''){ 

            $sql .= "(SELECT sec.sec_razao_social sec_origem
                    FROM homologacao_sugarcrm.ant_secretarias sec
                  WHERE sec.id = eg.eg_secretaria ) AS secretaria,"; 
            
            $sql .= "(SELECT sec.sec_cnpj
                        FROM homologacao_sugarcrm.ant_secretarias sec
                    WHERE sec.id = eg.eg_secretaria ) AS cnpj,";
            
            $sql .= "(SELECT sec.sec_cidade
                        FROM homologacao_sugarcrm.ant_secretarias sec
                    WHERE sec.id = eg.eg_secretaria ) AS cidade,";
            
            $sql .= "(SELECT sec.sec_cord_est_nome
                        FROM homologacao_sugarcrm.ant_secretarias sec
                    WHERE sec.id = eg.eg_secretaria ) AS coordenador,";
            }
    
        if($regional != ''){
            
            $sql .= "(SELECT reg.reg_razao_social regionais
                        FROM homologacao_sugarcrm.ant_regionais reg
                    WHERE reg.id = eg.eg_regional ) AS regional,";
            
            $sql .= "(SELECT reg.reg_cnpj
                        FROM homologacao_sugarcrm.ant_regionais reg
                    WHERE reg.id = eg.eg_regional ) AS cnpj,";
            
            $sql .= "(SELECT reg.reg_cidade
                        FROM homologacao_sugarcrm.ant_regionais reg
                    WHERE reg.id = eg.eg_regional ) AS cidade,";
        }
 
                  $sql .= "eg.eg_lote lote, eg_total total 
                  
                  FROM homologacao_sugarcrm.ant_estoque_geral eg
                  WHERE 1 = 1 " . $secretaria . $regional . $produto . $lote;

//                  ecoPre($sql);
//                  exit();
                  
                $result = mysql_query($sql);

                $lg = array();

                $i = 0;

                while($l = mysql_fetch_array($result)){
                    $lg[$i]['produto'] = $l['produto'];
                    $lg[$i]['secretaria'] = $l['secretaria'];
                    $lg[$i]['cidade'] = $l['cidade'];
                    $lg[$i]['regional'] = $l['regional'];
                    $lg[$i]['cnpj'] = $l['cnpj'];
                    $lg[$i]['coordenador'] = $l['coordenador'];
                    $lg[$i]['lote'] = $l['lote'];
                    $lg[$i]['total'] = $l['total'];
                    $i++;
                }

                $_SESSION['sucess'] = true;
                $_SESSION['categoria'] = 'Relatório de Estoque ';
                $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/relatorio-estoque';
                $_SESSION['cabecalho'] = "<font face='Verdana, Arial' size='5'> Impresso em: " . date("d/m/Y h:i:s") . "    &nbsp;Registros encontrados : ".$i."</font>";

                return $lg;

    }
    

}

?>
