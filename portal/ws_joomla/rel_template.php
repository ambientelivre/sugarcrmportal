<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title><?php echo $_SESSION['categoria'] . ' ' . date('d/m/Y');?></title>        
        <link rel="stylesheet" type="text/css" href="<?php echo LIB_PATH; ?>/reveal/reveal.css">    
        <link rel="stylesheet" type="text/css" href="<?php echo LIB_PATH; ?>/css/style.css">
        <!-- Reveal Modal Plugin só funciona com jquery 1.6... -->
        <script type="text/javascript" src="<?php echo LIB_PATH; ?>/js/jquery-1.6.min.js"></script>
        <script src="<?php echo LIB_PATH; ?>/reveal/jquery.reveal.js"></script>
    
    <script type="text/javascript">    
        $(document).ready(function() {
            $('.imprimir').click(function (){
               window.print() ;
            });
            
            $('.voltar').click(function (){
               window.location.replace('<?php echo PROJECT_URL; ?>'); 
            });            
        });
    </script>
       
    <!--
    <style>
        .rel_log_info_od{
            background: #eee;
            width: 75px;
        }
        
        .th_log{
            background: #ddd;
            height: 25px;
        }
        
        .log_filtro{
            width: 180px;
        }
    </style>
    -->
    
    </head>
    
    <body>

        <div id="container" style="width: 100%;">
            
            <div id="bt_default" class="voltar" style="margin: 0 0 35px 0;">
                <p>Voltar ao Portal</p>
            </div>

            <div id="bt_default" class="imprimir" style="margin: 0 0 35px 20px;">
                <p>Imprimir</p>
            </div>
            
            <h1 style="text-align: center; width: 900px; float: left"><?php echo $_SESSION['categoria']; ?></h1>

            <div id="rel_content">

                <!--DIV DE FILTRO-->
                <div id="filtro" style="float: left; width: 100%; overflow: hidden">
                    
                    <h3>Filtro Usado</h3>
                    
                    <table border="1" style="margin: 0 0 15px 0;">
                        <?php if($filtro['sec_origem'] != ''){ ?>
                            <tr>
                                <td class="texto_a_direita rel_log_info_od">Sec. ORIGEM</td>
                                <td class="texto_a_esquerda log_filtro" >&nbsp;<?php echo $filtro['sec_origem'] ?></td>
                            
                        <?php } ?>
                            
                        <?php if($filtro['sec_destino'] != ''){ ?>
                            
                                <td class="texto_a_direita rel_log_info_od">Sec. DESTINO</td>
                                <td class="texto_a_esquerda log_filtro">&nbsp;<?php echo $filtro['sec_destino'] ?></td>
                    
                        <?php } ?>
                            
                        <?php if($filtro['reg_origem'] != ''){ ?>
                    
                                <td class="texto_a_direita rel_log_info_od">Reg. ORIGEM</td>
                                <td class="texto_a_esquerda log_filtro">&nbsp;<?php echo $filtro['reg_origem'] ?></td>
                            
                        <?php } ?>
                            
                        <?php if($filtro['reg_destino'] != ''){ ?>
                            
                                <td class="texto_a_direita rel_log_info_od">Reg. DESTINO</td>
                                <td class="texto_a_esquerda log_filtro">&nbsp;<?php echo $filtro['reg_destino'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    
                    <table border="1" style="margin: 0 0 15px 0;">
                        <?php if($filtro['produto'] != ''){ ?>
                            <tr>
                                <td class="texto_a_direita rel_log_info_od">PRODUTO</td>
                                <td class="texto_a_esquerda">&nbsp;<?php echo $filtro['produto'] ?></td>
                        <?php } ?>
                            
                        <?php if($filtro['lote'] != ''){ ?>
                                <td class="texto_a_direita rel_log_info_od">LOTE</td>
                                <td class="texto_a_esquerda">&nbsp;<?php echo $filtro['lote'] ?></td>
                            </tr>
                        <?php } ?>
                            
                        <?php if($filtro['cliente'] != ''){ ?>
                                <td class="texto_a_direita rel_log_info_od">CLIENTE</td>
                                <td class="texto_a_esquerda">&nbsp;<?php echo $filtro['cliente'] ?></td>
                            </tr>
                        <?php } ?>
                            
                        <?php if($filtro['data'] != ''){ ?>
                            <tr>
                                <td class="texto_a_direita rel_log_info_od">DATA</td>
                                <td  class="texto_a_esquerda" colspan="3">&nbsp;<?php echo $filtro['data'] ?></td>
                            </tr>
                        <?php } ?>
                            
                        <?php if($filtro['status'] != ''){ ?>
                            <tr>
                                <td class="texto_a_direita rel_log_info_od">STATUS</td>
                                <td  class="texto_a_esquerda" colspan="3">&nbsp;<?php echo $filtro['status'] ?></td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>

                <?php if($acao == 'REL_INUT'){ ?>
                
                    <table border='1'>

                        <?php if($rel_inut == ''){ ?>
                                <tr >
                                    <td class="rel_log_info_od" colspan="9">Nada encontrado</td>
                                </tr>

                            <?php } else { ?> 

                                    <?php
                                        foreach($rel_inut as $ru){ ?>
                                            <tr>
                                                <?php if($ru['secretaria'] != ''){ ?>
                                                    <td>Secretaria:&nbsp;<?php echo $ru['secretaria']; ?></td>
                                                <?php }else{ ?>
                                                    <td>Regional:&nbsp;<?php echo $ru['regional']; ?></td>
                                                <?php } ?>
                                                    <td>Data:&nbsp;<?php echo converte_data_BR($ru['data']); ?></td>
                                                    <td>Ocorr&ecirc;ncia:&nbsp;<?php echo $ru['in_id_ocorrencia']; ?></td>
                                                    <td>Motivo:&nbsp;<?php echo $ru['motivo']; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <table border='1'>
                                                        <th>Produto</th>
                                                        <th>QNT.</th>
                                                        <th>Lote</th>

                                                        <?php foreach($ru['lista'] as $lista){ ?>
                                                            <tr>
                                                                <td><?php echo $lista['produto']?></td>
                                                                <td><?php echo $lista['inlist_qnt']?></td>
                                                                <td><?php echo $lista['inlist_lote']?></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                            </tr>
                                        <?php } ?>
                    
                
                            <?php } ?>
                    </table>
                
                    <?php }else if($acao == 'REL_PEDIDO'){ ?>

                        <table border="1">
                            <th  >Sec.</br>ORIGEM</th>
                            <th style="width: 80px">Reg.</br>ORIGEM</th>
                            <th style="width: 80px">Sec.</br>DESTINO</th>
                            <th style="width: 80px" >Reg.</br>DESTINO</th>
                            <th style="width: 80px" >CLIENTE</th>
                            <th style="width: 80px" >C&oacute;d </br>BOLETO</th>
                            <th style="width: 80px" >STATUS</th>
                            <th style="width: 80px" >Val.</br>TOTAL</th>
                            <th style="width: 80px" >DATA</th>
                
                        <?php if($rel_pedido[0] == ''){ ?>
                            <tr>
                                <td colspan="9" >Nenhum resultado encontrado</td>
                            </tr>
                            
                        <?php }else{ 
                            
                                foreach($rel_pedido as $dados){ ?>

                                    <tr>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['sec_origem']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['reg_origem']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['sec_destino']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['reg_destino']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['cliente_destino']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['ped_codigo_boleto']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['ped_status']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dados['ped_valor_total']; ?></td>
                                        <td style="width: 80px" >&nbsp;<?php echo $dt_br = converte_data_BR($dados['data']); ?></td>
                                    </tr>

                            <?php } ?>

                            </table>
                    <?php } ?>
                    
                
                <?php }else if($acao == 'LOG'){ ?>
                    
                    <table border='1'>
                        <th class="th_log" style="width: 75px">Sec. Origem</th>
                        <th class="th_log" style="width: 75px">Sec. Destino</th>
                        <th class="th_log" style="width: 75px">Reg. Origem</th>
                        <th class="th_log" style="width: 75px">Reg. Destino</th>
                        <th class="th_log" style="width: 125px">Cliente</th>
                        <th class="th_log" style="width: 140px">Produto</th>
                        <th class="th_log" style="width: 40px">Lote</th>
                        <th class="th_log" style="width: 55px">Qnt.</th>
                        <th class="th_log" style="width: 20px">Data</th>
                        
                        
                        <?php
                            if(empty($rel_log)){ ?>
                                <tr >
                                    <td class="rel_log_info_od" colspan="9">Nada encontrado</td>
                                </tr>
                            <?php }else{

                                foreach ($rel_log as $log){ ?>

                                <tr>
                                    <td class="rel_log_info_od">&nbsp;<?php echo $log['sec_origem']; ?> </td>
                                    <td class="rel_log_info_od">&nbsp;<?php echo $log['sec_destino']; ?> </td>
                                    <td class="rel_log_info_od">&nbsp;<?php echo $log['reg_origem']; ?></td>
                                    <td class="rel_log_info_od">&nbsp;<?php echo $log['reg_destino']; ?></td>
                                    <td style="background: #eee; width: 125px;">&nbsp;<?php echo $log['cliente']; ?></td>
                                    <td style="background: #eee; width: 140px;">&nbsp;<?php echo $log['produto']; ?></td>
                                    <td style="background: #eee; width: 40px;">&nbsp;<?php echo $log['lote']; ?></td>
                                    <td style="background: #eee; width: 55px;">&nbsp;<?php echo $log['qtd']; ?></td>
                                    <td style="background: #eee; width: 20px;">&nbsp;<?php echo $log['data']; ?></td>
                                </tr> 

                                <?php } 
                            } ?>

                    </table>
                    
                    <?php exit();  ?>
                    
                <?php } else if($acao == 'REL_GERAL'){ 
                    
                if(!empty($rel_geral)){ ?>
                        <ul id="cab_rel" style="margin-bottom: 50px;">
                            <?php $data = data_pt(date('l'), date('F')); ?>

                            <!--AQUI COMEÇAM AS CONDICIONAIS-->
                            <!--A CIDADE NO CASO DO CAMPO ABAIXO, SE DÁ DE ACORDO COM O LOGIN DO USUARIO LOGADO. NO MOMENTO PUXA A CIDADE DE ACORDO COM O QUE FOI PESQUISADO-->
                            <ul class="rel_cidade_data">
                                <li><?php echo $rel_geral[0]['cidade'];?>, <?php echo date('d'); ?> de <?php echo $data['mes']; ?> de <?php echo date('Y'); ?>.</li>
                            </ul>

                            <?php 
                                if($rel_geral[0]['secretaria'] != ''){ ?>

                                    <li class="no_border texto_a_esquerda" style="width: 40%;">Razão Social (Secretaria):&nbsp;<?php echo $rel_geral[0]['secretaria']; ?></li>
                                    <li class="no_border texto_a_esquerda" style="width: 25%;">CNPJ:&nbsp;<?php echo $rel_geral[0]['cnpj']; ?></li>                                

                            <?php }else{ 
                                    if($produtos_inutilizados->getIn_regionais() != ''){ ?>
                                        <li class="no_border texto_a_esquerda" style="width: 40%;">Razão Social (Regional):&nbsp;<?php echo $produtos_inutilizados->getIn_regionais(); ?></li>
                                <?php } 
                                    } ?>
                            <?php if($rel_geral[0]['coordenador']){ ?>
                                <li class="no_border">Coordenador PNCEBT: &nbsp;<?php echo $rel_geral[0]['coordenador']; ?></li>
                            <?php } ?> 

                            <ul style="width: 100%; float: left; margin: 0; padding: 0;"> 
                                <li class="no_border">Solicitamos a baixa de estoque dos produtos abaixo discriminados que se encontram em nosso poder, enviados através de remessa em consignação conforme NF &nbsp; do dia </li>      
                            </ul>

                        </ul>
                
                        <table border="1px" style="margin-top: 50px"> 
                            
                            <th width="50px" >Nº&nbsp;</th>
                            <th width="650px" >Produto</th>
                            <th width="100px" >Lote</th>
                            <th width="70px" >Qtd.</th>

                            <?php $i = 0;
                            
                                foreach ($rel_geral as $rg){ ?>
                            
                                    <tr>
                                        <td >&nbsp;<?php echo $i+1; ?></td>
                                        <td >&nbsp;<?php echo $rg['produto']; ?></td>
                                        <td >&nbsp;<?php echo $rg['lote'][$i]; ?></td>
                                        <td >&nbsp;<?php echo $rg['total']; ?></td>
                                    </tr>
                                    
                            <?php $i++; } ?>

                    <?php }else{ ?>
                                    <tr>
                                        <td><h3>Nenhum Resultado Encontrado</h3></td>
                                    </tr>
                    <?php } ?>
                                    
                    </table>
                
                <?php } ?>
                
            </div>
            
        </div>
        
    </body>