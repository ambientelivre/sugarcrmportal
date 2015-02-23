<?php

class uploadDao {
    public $p = null;
    
    public function uploadDao(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
    public function checarPedido($id_pedido){
        $sql = "SELECT 
                    ped.ped_codigo_boleto cod_boleto,
                    
                    ped.ped_status ped_status,
                    
                    ped.ped_valor_total,
                    
                    (select cli.id from homologacao_sugarcrm.ant_cliente cli where ped.ped_clie_destino = cli.id) AS 'id_cliente',
                    (select cli.name from homologacao_sugarcrm.ant_cliente cli where ped.ped_clie_destino = cli.id) AS 'nm_cliente',
                    
                    (select reg.id from homologacao_sugarcrm.ant_regionais reg where ped.ped_reg_origem = reg.id) AS 'reg_origem',
                    (select reg.reg_nm_fantasia from homologacao_sugarcrm.ant_regionais reg where ped.ped_reg_origem = reg.id) AS 'nm_reg_origem',
                    (select reg.id from homologacao_sugarcrm.ant_regionais reg where ped.ped_reg_destino = reg.id) AS 'reg_destino',
                    (select reg.reg_nm_fantasia from homologacao_sugarcrm.ant_regionais reg where ped.ped_reg_destino = reg.id) AS 'nm_reg_destino',

                    (select sec.id from homologacao_sugarcrm.ant_secretarias sec where ped.ped_sec_origem = sec.id) AS 'sec_origem',
                    (select sec.sec_razao_social from homologacao_sugarcrm.ant_secretarias sec where ped.ped_sec_origem = sec.id) AS 'nm_sec_origem',
                    (select sec.id from homologacao_sugarcrm.ant_secretarias sec where ped.ped_sec_destino = sec.id) AS 'sec_destino',
                    (select sec.sec_razao_social from homologacao_sugarcrm.ant_secretarias sec where ped.ped_sec_destino = sec.id) AS 'nm_sec_destino'

                FROM homologacao_sugarcrm.ant_pedido ped 
                WHERE ped.ped_codigo_boleto = " . $id_pedido;
             
        try {
            $result = inserirDados($sql);
            
            $i = 0;

            $pedido = array();
            $pedido1 = array();            
            
            while ($l = mysql_fetch_array($result)) {
                $pedido1['id_arquivo'] = $l['cod_boleto'];
                $pedido1['ped_status'] = $l['ped_status'];
                $pedido1['id_cliente'] = $l['id_cliente'];
                $pedido1['nm_cliente'] = $l['nm_cliente'];
                $pedido1['reg_origem'] = $l['reg_origem'];
                $pedido1['nm_reg_origem'] = $l['nm_reg_origem'];
                $pedido1['reg_destino'] = $l['reg_destino'];
                $pedido1['nm_reg_destino'] = $l['nm_reg_destino'];
                $pedido1['sec_origem'] = $l['sec_origem'];
                $pedido1['nm_sec_origem'] = $l['nm_sec_origem'];
                $pedido1['sec_destino'] = $l['sec_destino'];
                $pedido1['nm_sec_destino'] = $l['nm_sec_destino'];
                $pedido1['valor_total'] = $l['ped_valor_total'];
                $pedido1['cat'] = 'P';
                
                $pedido[$i] = $pedido1;

                $i++;
            }
            
            return $pedido;
            exit();
        }

        catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }

    }
    
    function listarPedido($id_pedido){
        
        $sql = "SELECT prod.name, prod.id, list.list_lote, list.list_quantidade
                FROM homologacao_sugarcrm.ant_lista_pedidos list
                LEFT JOIN homologacao_sugarcrm.ant_produto prod ON prod.id = list.list_id_produto
                WHERE list.id_pedido = " . $id_pedido . " 
                GROUP BY 
                prod.name, 
                prod.id, 
                list.list_lote";
                
            try {
                $result = inserirDados($sql);

                $i = 0;

                $listagem = array();
                $listagem1 = array();            

                while ($l = mysql_fetch_array($result)) {
                    $listagem1['quantidade'] = $l['list_quantidade'];
                    $listagem1['pd_nome'] = $l['name'];
                    $listagem1['pd_id'] = $l['id'];
                    $listagem1['lista_lote'] = $l['list_lote'];
                    

                    $listagem[$i] = $listagem1;

                    $i++;
                }
                
                return $listagem;
                exit();
            }

        catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
            
    }
    
    
    function checarInutilizado($id_ocorrencia){ 
        $sql = "SELECT prod.name, inut.in_motivo, inut.in_id_ocorrencia, (
            SELECT reg.reg_razao_social
            FROM homologacao_sugarcrm.ant_regionais reg
            WHERE reg.id = inut.in_regionais
            ) AS regional, (
            SELECT sec.sec_razao_social
            FROM homologacao_sugarcrm.ant_secretarias sec
            WHERE sec.id = inut.in_secretaria
            ) AS secretaria, 
            inut.in_lote, in_qt, inut.in_data
            FROM homologacao_sugarcrm.ant_inutilizado inut
            INNER JOIN homologacao_sugarcrm.ant_produto prod ON prod.id = inut.in_produto
            WHERE inut.in_id_ocorrencia = '" . $id_ocorrencia . "'" ;
        
        try {
            $result = inserirDados($sql);

            $i = 0;

            $listagem = array();
            $listagem1 = array();            

            while ($l = mysql_fetch_array($result)) {
                
                if($l['in_qt'] != ''){
                    $listagem1['quantidade'] = $l['in_qt'];
                }else{
                    $listagem1['quantidade'] = ' ';
                }
                
                if($l['name'] != ''){
                    $listagem1['pd_nome'] = $l['name'];
                }else{
                    $listagem1['pd_nome'] = ' ';
                }
                
                if($l['in_id_ocorrencia'] != ''){
                    $listagem1['id_arquivo'] = $l['in_id_ocorrencia'];
                }else{
                    $listagem1['id_arquivo'] = ' ';
                }
                
                if($l['in_motivo'] != ''){
                    $listagem1['motivo'] = $l['in_motivo'];
                }else{
                    $listagem1['motivo'] = ' ';
                }
                
                if($l['regional'] != ''){
                    $listagem1['regional'] = $l['regional'];
                }else{
                    $listagem1['regional'] = ' ';
                }
                
                if($l['secretaria'] != ''){
                    $listagem1['secretaria'] = $l['secretaria'];
                }else{
                    $listagem1['secretaria'] = ' ';
                }
                
                if($l['in_lote'] != ''){
                    $listagem1['lote'] = $l['in_lote'];
                }else{
                    $listagem1['lote'] = ' ';
                }
                
                $listagem1['cat'] = 'I';

                $listagem[$i] = $listagem1;

                $i++;
            }
            
//            ecoPre($sql);
//            echo '</br>';
//            ecoPre($listagem);
//            exit();

            return $listagem;
            exit();
        }

        catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
        }
        
    }

//    function ()
//            $sql = "SELECT reg.id, reg.reg_nm_fantasia reg_origem
//                            FROM homologacao_sugarcrm.ant_regionais reg
//                            LEFT JOIN homologacao_sugarcrm.ant_pedido ped ON ped.ped_reg_origem = reg.id
//                            WHERE ped.ped_codigo_boleto = " . $id_pedido . " 
//                            LIMIT 0 , 30";
//
//            $result = mysql_query($sql);
//
//            while ($l = mysql_fetch_array($result)) {
//                $reg_origem = $l['reg_origem'];
//                $reg_origem_id = $l['id'];
//            }

//            $sql = "SELECT reg.id, reg.reg_nm_fantasia reg_destino
//                            FROM homologacao_sugarcrm.ant_regionais reg
//                            LEFT JOIN homologacao_sugarcrm.ant_pedido ped ON ped.ped_reg_destino = reg.id
//                            WHERE ped.ped_codigo_boleto = " . $id_pedido  . " 
//                            LIMIT 0 , 30";
//
//            $result = mysql_query($sql);
//
//            while ($l = mysql_fetch_array($result)) {
//                $reg_destino = $l['reg_destino'];
//            }
//    }
}

?>