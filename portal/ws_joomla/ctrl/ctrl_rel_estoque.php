<?php

$filtro='';

if (empty( $sec_or_id )){
    $sec_or= "";
    
} else {
    $sec_or = " AND log_sec_origem = '".$sec_or_id."'";
    
}

$reg_or_id = $_POST['reg_or'];
if (empty( $reg_or_id )){
    $reg_or= "";
    
} else {
    $reg_or = " AND log_reg_origem = '".$reg_or_id."'";
    
}

$sec_des_id = $_POST['sec_des'];
if (empty( $sec_des_id )){
    $sec_des= "";
    
} else {
    $sec_des = " AND log_sec_destino = '".$sec_des_id."'";
    
}

$reg_des_id = $_POST['reg_des'];
if (empty( $reg_des_id )){
    $reg_des= "";
    
} else {
    $reg_des = " AND log_reg_destino = '".$reg_des_id."'";
    
}

$produto_id = $_POST['in_produtos'];
if (empty( $produto_id )){
    $produto= "";
    
} else {
    $produto = " AND log_prod = '".$produto_id."'";
    
}

$lote_id = $_POST['lote'];
if (empty( $lote_id )){
    $lote= "";
    
} else {
    $lote = " AND log_lote = '".$lote_id."'"; 
    $filtro=$filtro.' Lote='.$lote_id;
    
}

$dt_in_id = $_POST['in_data_inicio'];
$dt_fn_id = $_POST['in_data_fim'];
if ((empty( $dt_in_id )) OR (empty( $dt_fn_id )) ){
    $data= "";
    
} else {
    $data = " AND date_format( le.log_data, '%m/%d/%Y' )  BETWEEN '".$dt_in_id ."' AND '".$dt_fn_id ."'"; $filtro=$filtro.' Data entre='.$dt_in_id.' e '.$dt_fn_id;
    
}
        $con=mysqli_connect("localhost","ambientelivre","sugarsql123","homologacao_sugarcrm");
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Falha de conexão com o banco: " . mysqli_connect_error();
        }

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
            
            echo '<pre> --> ';
            print_r($result);
            echo '</pre> <--';
            exit();     
            
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
            
 if (!empty( $produto_id )) {$filtro=$filtro.' Produto='.$lg['PRODUTO'];}
$dataAtual = date("d/m/Y h:i:s");
echo "<font face='Geneva, Arial' size='1'> Impresso em: ".$dataAtual."    Registros encontrados : ".$i."</font>";
?>