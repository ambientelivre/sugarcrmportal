    <meta charset="utf-8">
<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="../lib/js/reveal/reveal.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
    <script src="../lib/js/reveal/jquery.reveal.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
    
    <script type="text/javascript">    
        $(function() {
            $('.no_border').css('border','0 solid');
            
            $('#container').css('width','940');
            
            $('.imprimir_relatorio').click(function (){
                window.print();
            });
            
            $('.home').click(function (){
                $(location).attr('href', 'http://sugar.tecpar.br/portaldocliente/');
            });
            
            $('.voltar').click(function (){
                $(location).attr('href', 'http://sugar.tecpar.br/portaldocliente/index.php/relatorio-estoque');
            });
            
        });
    </script>
        
    </head>
    
    <body>
        
        <div id="container">

            <div id="content">
                <?php
                
                    if($_SESSION['error'] == true){ ?>
                        <div id="msg_error">
                            <div id="msg_content">
                                <h1><?php echo $_SESSION['msg_error']; ?></h1>
                            </div>
                        </div>
                
                    <?php }else if($_SESSION['sucess'] == true){ ?>
                
                        <div id="msg_sucess">
                            <div id="msg_content">
                                
                                <!--<h1><?php // echo $_SESSION['msg_sucess']; ?></h1>-->

                                <?php if($_SESSION['categoria'] == 'novo Pedido'){ ?>
                                    <h1>Valor Total: R$<?php echo $_POST['ped_valor_total']; ?></h1>    
                                    
                                    <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                        <div id="bt_default">
                                            <p> <?php echo $_SESSION['categoria'];?></p>
                                        </div> 
                                    </a>
                                    
                                
                                    <a href="#" class="big-link bt_default_link" data-reveal-id="myModal" data-animation="fade">
                                        <div id="gerar_boleto">
                                            <h3>Gerar Boleto</h3>
                                        </div>
                                    </a>  
                                
                                    <ul id="cab_rel" style="margin: 20px 0 0 0;">
                                        <li style="width: 10%;">Qtd.</li>
                                        <li style="width: 50%;" >Produto</li>
                                        <li style="width: 35%;" >Lote</li>
                                    </ul>
                                
                                    <ul id="ul_rel" style="width: 100%; ">
                                        <?php $i = 0;

                                            foreach ($pedido_veterinario_regional->getPed_quantidade() as $qnt){ 
                                                $info = $pedido_veterinario_regionalDAO->pesquisaProduto(null, null, $_POST['eg_prod'][$i]); ?>

                                            <li style="width: 10%;"><?php echo $qnt; ?></li>
                                            <li style="width: 50%;"><?php echo $info['produto']; ?></li>
                                            <li style="width: 35%; border-right: 0px solid;"><?php echo $_POST['ped_lote'][$i]; ?></li>

                                        <?php $i++; } ?> 

                                    </ul>
                                
                                <?php }else if($_SESSION['categoria'] == 'Atendimento'){ ?>
                                    
                                    <h1><?php  echo $_SESSION['msg_sucess']; ?></h1>
                                    
                                        <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                            <div id="bt_default">
                                                <p>Realizar Novo <?php echo $_SESSION['categoria'];?></p>
                                            </div> 
                                        </a>
                                <?php } else if($acao == 'REL_GERAL'){ ?>
                                    
                                    <?php include_once 'lib/rel_template.php'; ?>
                                    
                                <?php }else if($_SESSION['categoria'] == 'Produto(s) Inutilizado(s)'){ ?>

                                    
                                        <?php 

                                            if($acao == 'REL_INUT'){
                                                include_once 'lib/rel_template.php';
                                                exit();
                                            }
                                        ?>
                                
                                        <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                            <div id="bt_default">
                                                <p>Novo <?php echo $_SESSION['categoria'];?></p>
                                            </div> 
                                        </a>
                                
                                        <h3 style="width: 100%; float: left; text-align: center; text-decoration: underline;">Baixa de Estoque por Avaria</h3>
                                        
                                        <table border="1" width="100%">
                                            <th>PRODUTO</th>
                                            <th>Qnt.</th>
                                            <th>Val.</br>Unit</th>
                                            <th>Val.</br>Total</th>
                                            <th>LOTE</th>
                                            
                                            <?php $i = 0 ?>
                                            <?php foreach($info['produto'] as $prod){ ?>
                                                <tr> 
                                                    
                                                    <td><?php echo $prod; ?></td>
                                                    <td><?php echo $_POST['in_qnt'][$i] ?></td>
                                                    <td><?php echo $_POST['in_valor_unitario'][$i] ?></td>
                                                    <td><?php echo $_POST['in_valor_total'][$i] ?></td>
                                                    <td><?php echo $_POST['in_lote'][$i] ?></td>
                                                </tr>                                                
                                                <?php $i++ ?>
                                            <?php } ?>
                                                <tr>
                                                    <td colspan="4" class="texto_a_esquerda" >Valor total do pedido: R$ <?php echo $_POST['ped_valor_total']?></td>
                                                    <td class="texto_a_esquerda" >Cód Inutilizado: <?php echo $_SESSION['id_ocorrencia']?></td>
                                                </tr>

                                        </table>
                                        
                                
                                <?php } else if($_SESSION['categoria'] == 'Regional'){ ?>
                                                                            
                                        <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                            <div id="bt_default">
                                                <p>Cadastrar Nova <?php echo $_SESSION['categoria'];?></p>
                                            </div> 
                                        </a>
                                        
                                <?php } else if($_SESSION['categoria'] == 'Secretarias') { ?>
                                                                                                                    
                                        <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                            <div id="bt_default">
                                                <p>Cadastrar Nova <?php echo $_SESSION['categoria'];?></p>
                                            </div> 
                                        </a>
                                <?php } else if($_SESSION['categoria'] == 'Cliente/Veterinário'){ ?>
                                        
                                        <h1 style="text-align: center"><?php echo $_SESSION['msg_sucess']; ?></h1>
                                        
                                        <?php if($_SESSION['alterar'] == true){ ?>
                                        
                                            <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                                <div id="bt_default">
                                                    <p>Alterar Novo(a) <?php echo $_SESSION['categoria'];?></p>
                                                </div> 
                                            </a>
                                        
                                        <?php }else{ ?>

                                            <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                                <div id="bt_default">
                                                    <p>Cadastrar Novo(a) <?php echo $_SESSION['categoria'];?></p>
                                                </div>
                                            </a>
                                        
                                        <?php } ?>
                                        

                                <?php } else if($_SESSION['categoria'] == 'Confirmar Novo Boleto'){ ?>

                                        <a class="bt_default_link" href="<?php echo $_SESSION['link']?>">
                                            <div id="bt_default">
                                                <p><?php echo $_SESSION['categoria'];?></p>
                                            </div> 
                                        </a>

                                <?php } else if($_SESSION['categoria'] == 'Relatório de Pedidos'){ ?>

                                    <?php include_once 'lib/rel_template.php'; ?>

                                <?php } else if($_SESSION['categoria'] == 'RELATÓRIO DE HISTÓRICO'){ 
                                    
                                            $acao = 'LOG';
                                            include_once 'lib/rel_template.php';    

                                      }else if($_SESSION['categoria'] == 'Contato'){
                                          
                                          echo '<h1>' . $_SESSION['msg_sucess'] . '</h1>';
                                          
                                          if($_REQUEST['ct_sec'] != ''){
                                              $par = '&ct_sec=' . $_REQUEST['ct_sec'];
                                              
                                          }else if($_REQUEST['ct_reg'] != ''){
                                              $par = '&ct_reg=' . $_REQUEST['ct_reg'];
                                              
                                          } ?>
                                        
                                        <?php if($acao == 'I'){ ?>
                                        
                                        <?php }else if($acao == 'A'){ ?>
                                        
                                            <div id="h_rel_estoque" >
                                                    <table border='1'>
                                                        <th width='100px'>Nome</th>
                                                        <th width='200px'>Sobrenome</th>
                                                        <th width='130px'>Tel</th>
                                                        <th width='130px'>Cel</th>
                                                        <th width='130px'>Cargo</th>
                                                        <th width='130px'>Ação</th>

                                                        <?php // ecoPre($contatos)?> 
                                                        
                                                        <?php foreach($contatos as $con){ ?>
                                                            <tr>
                                                                <td><?php echo $con['nome'];?>&nbsp;</td>
                                                                <td><?php echo $con['sobrenome'];?>&nbsp;</td>
                                                                <td><?php echo $con['telefone'];?>&nbsp;</td>
                                                                <td><?php echo $con['celular'];?>&nbsp;</td>
                                                                <td><?php echo $con['cargo'];?>&nbsp;</td>
                                                                <td> 
                                                                    <a href="http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_contatos.php?acao=P&ct_id=<?php echo $con['id']?>&sec_id=<?php echo $contato->getCt_secretaria();?>">A</a>
                                                                    <a href="http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_contatos.php?acao=E&ct_id=<?php echo $con['id']?>&sec_id=<?php echo $contato->getCt_secretaria();?>">E</a>
                                                                </td>
                                                            </tr>                                                                
                                                        <?php } ?>

                                                    </table>
                                                
                                                </div>
                                            
                                            
                                        <?php }else{ ?>
                                        
                                            <?php if($contatos != ''){ ?> 
                                        
                                                <div id="h_rel_estoque" >
                                                    <table border='1'>
                                                        <th width='100px'>Nome</th>
                                                        <th width='200px'>Sobrenome</th>
                                                        <th width='130px'>Tel</th>
                                                        <th width='130px'>Cel</th>
                                                        <th width='130px'>Cargo</th>
                                                        <th width='130px'>Ação</th>

                                                    <?php
                                                    
                                                        if($contato->getCt_secretaria() != ''){
                                                            $parametro = '&sec_id=' . $contato->getCt_secretaria();
                                                        }else if($contato->getCt_regional() != ''){
                                                            $parametro = '&regional_id=' . $contato->getCt_regional();
                                                        }
                                                        
                                                    ?> 
                                                        
                                                        <?php foreach($contatos as $con){ ?>
                                                            <tr>
                                                                <td><?php echo $con['nome'];?>&nbsp;</td>
                                                                <td><?php echo $con['sobrenome'];?>&nbsp;</td>
                                                                <td><?php echo $con['telefone'];?>&nbsp;</td>
                                                                <td><?php echo $con['celular'];?>&nbsp;</td>
                                                                <td><?php echo $con['cargo'];?>&nbsp;</td>
                                                                <td> 
                                                                    <a href="http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_contatos.php?acao=P&ct_id=<?php echo $con['id'] . $parametro; ?>">A</a>
                                                                    <a href="http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_contatos.php?acao=E&ct_id=<?php echo $con['id'] . $parametro; ?>">E</a>
                                                                </td>
                                                                </td>
                                                            </tr>                                                                
                                                        <?php } ?>

                                                    </table>

                                                </div>
                                        
                                              <?php }else{ ?>
                                                <h1>Nada encontrado</h1>
                                            <?php } ?>
                                        <?php } ?>
                                                                               
                                        <a style="text-decoration: none; color: #000;" href="http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_contatos.php?acao=I<?php echo $par;?>">
                                            <div id="bt_default">
                                                Cadastrar Novo Contato
                                            </div>
                                        </a>
                                               
                                        <a href="http://sugar.tecpar.br/portaldocliente/index.php/manutencao-de-contatos" style="text-decoration: none;">
                                            <div id="bt_default" class="con_alterar">
                                                <p>Nova pesquisa</p>
                                            </div>
                                        </a>
                                        
                                <?php } ?>

                            </div>

                        </div>
                
                <?php } ?>
                
                <div id="myModal" class="reveal-modal xlarge" style="top: 10px;">
            
                    <?php include_once '../lib/boleto_php/boleto_bb.php'; ?>

                </div>
                
            </div>
            
        </div>

    </body>
    
</html>