<html>
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="<?php echo LIB_PATH; ?>/reveal/reveal.css">    
        <link rel="stylesheet" type="text/css" href="<?php echo LIB_PATH; ?>/css/style.css">
        <!-- Reveal Modal Plugin só funciona com jquery 1.6... -->
        <script type="text/javascript" src="<?php echo LIB_PATH; ?>/js/jquery_legacy_1.6.min.js"></script>
        <script src="<?php echo LIB_PATH; ?>/reveal/jquery.reveal.js"></script>
        <script src="<?php echo LIB_PATH; ?>/js/ajax.js"></script>

        <style>
            
            .h_div{
                float: left;
                background: #f1f1f1;
                border-bottom: 2px solid #cdcdcd;
                overflow: hidden;
                width: 930px;
                padding: 15px 5px;
                margin: 0 0 10px 0;
                
            }
            
            .h_div p{
                float: left;
                margin: 0;
            }
            
            .h_div ul{
                float: left;
                margin: 0;
                padding: 0px;
            }
            
            .h_div ul li{
                float: left;
                margin: 0 10px 0 0;
                list-style: none;
                
            }
            
            .b{
                display: none;
            }
            
        </style>
        
        <script>

            $(function() {
                
                $('.atender').click(function(){
                    $('#con_form').submit();
                });
                
                $('.voltar').click(function() {
                    history.back();
                });
                
                $('.qnt').keyup(function(){
                    
                    var counter = $(this).attr('id');
                    
                    var cv = $(this).val();
                    
                    var qnt = $('#q' + counter).val();
                    
                });
                
                $('.atendimento').click(function(){
                    var at = $(this).val();
                    
                    if(at !== 'parcial'){
                        $('.a').hide();
                        $('.b').show();
                    }else{
                        $('.b').hide();
                        $('.a').show();                        
                    }
                });
                
            });
            
        </script>
        
    </head>
    
    <body>
        <div id="container">
            <div id="content">
                
                <div class="h_div" id="" style="">
                    <form id="con_form" method="POST" action="<?php echo PROJECT_URL; ?>ws_joomla/ctrl/ctrl_nf.php">
                    <table border='0'>
                        <tr>
                            <td>Ped: </td>
                            <td><?php echo $pedido[0]['id_pedido']; ?></td>
                            <td>Atendido&nbsp;</td>
                            <td>
                                <label style="text-align: left; cursor: pointer;"><input class="atendimento" type="radio" name="tp_at" value="total" >&nbsp;Total</label></br>
                                <label style="text-align: left; cursor: pointer;"><input class="atendimento" type="radio" name="tp_at" value="parcial" >&nbsp;Parcial</label>
                            </td>
                        </tr>
                    </table>
                    
                    <table border='1'>
                        <th width='655px'>Produto</th>
                        <th width='80px'>Lote</th>
                        <th width='80px'>Qnt Pedida</th>
                        <th width='20px'>Qnt Atendida</th>
                        
                        <?php $i = 1; ?>
                        
                        <?php foreach($pedido as $pd){ ?>
                            <tr>
                                <td><?php echo $pd['produto'];?></td>
                                <td><?php echo $pd['lote'];?></td>
                                <td><input type="hidden" id="q<?php echo $i; ?>" value="<?php echo $pd['qnt'];?>"><?php echo $pd['qnt'];?></td>
                                <td>
                                    <input type="text" id='<?php echo $i; ?>' size="1" class="qnt a" name="qnt_atendida[]" value="<?php echo $pd['qnt_atendida']?>" >
                                    <input type="text" id='<?php echo $i; ?>' size="1" class="qnt b" name="qnt_atendida[]" value="<?php echo $pd['qnt']?>" >
                                </td>
                                <input name="id_produto[]" type="hidden" value="<?php echo $pd['id'];?>">
                            </tr>
                            
                        <?php $i++; } ?>
                            
                            <input type="hidden" name="id_pedido" value="<?php echo $pedido[0]['id_pedido']; ?>">
                            <input type="hidden" name="acao" value="A">
                        
                    </table>

                    <div class="atender" id="bt_default">
                        <p>Atender</p>
                    </div>

                    <div class="voltar" id="bt_default">
                        <p>Voltar</p>
                    </div>
                    
                </form>
                </div>
                
            </div>
        </div>

    </body>
    
</html>