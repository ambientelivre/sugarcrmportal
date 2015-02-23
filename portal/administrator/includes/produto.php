<?php

// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];

    $aviso = "";
    $conexao = mysql_connect('localhost', 'ambientelivre', 'sugarsql123');
    mysql_query('SET NAMES "utf8"', $conexao);

    if (!$conexao) {
        $aviso = "Não foi possível estabelecer uma conexão com o banco de dados.";
    } else {
        $selecao = mysql_select_db('homologacao_sugarcrm', $conexao) or die(mysql_error());

        if (!$selecao) {
            $aviso = "Não foi possível selecionar o banco de dados.";
        }
    }

    if ($aviso) {
        echo "<center>
               " . $aviso . "                 
            </center>";
        exit();
    }





    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT eg.name AS 'PRODUTO', eg.eg_lote AS 'LOTE', eg.eg_total AS 'QT', rg.reg_razao_social AS 'REGIONAL', sc.sec_razao_social AS 'SECRETARIA'
FROM ant_estoque_geral eg
LEFT JOIN ant_regionais rg ON ( eg.eg_regional = rg.id )
LEFT JOIN ant_secretarias sc ON ( eg.eg_secretaria = sc.id ) ";
    } else {
        
        $sql = "SELECT eg.name AS 'PRODUTO', eg.eg_lote AS 'LOTE', eg.eg_total AS 'QT', rg.reg_razao_social AS 'REGIONAL', sc.sec_razao_social AS 'SECRETARIA'
FROM ant_estoque_geral eg
LEFT JOIN ant_regionais rg ON ( eg.eg_regional = rg.id )
LEFT JOIN ant_secretarias sc ON ( eg.eg_secretaria = sc.id ) 
WHERE eg.name like '%$nome%'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($result);
    // Verifica se a consulta retornou linhas 
    //if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>PRODUTO</th>
                            <th>LOTE</th>
                            <th>QUANTIDADE</th>
                            <th>SECRETARIA</th>
                            <th>REGIONAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["PRODUTO"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["LOTE"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["QT"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["SECREARIA"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["REGIONAL"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
   // } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
     //   echo "Não foram encontrados registros!aviso:$aviso, sql:$sql";
    //}
}
?>


