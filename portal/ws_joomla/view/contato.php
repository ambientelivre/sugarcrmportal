<?php
include_once '../model/conexao.class.php';

        //Resgata as Regionais do Banco
        $sql = "SELECT * FROM ant_regionais WHERE id = " . $_REQUEST['ct_reg'] . " LIMIT 0 , 30";
        $result = mysql_query($sql);   

        $i = 0;
        while($l = mysql_fetch_array($result)){
            $reg1['reg_id'] = $l['id'];
            $reg1['reg_razao'] = $l['reg_razao_social'];
            $reg1['reg_nm_fantasia'] = $l['reg_nm_fantasia'];
            $regionais[$i] = $reg1;
            $i++;
        }
        
        //Resgata as Secretarias do Banco
        $sql = "SELECT * FROM ant_secretarias WHERE id = " . $_REQUEST['ct_sec'] . " LIMIT 0 , 30";
        $result = mysql_query($sql);   

        $i = 0;
        while($l = mysql_fetch_array($result)){
            $sec1['sec_id'] = $l['id'];
            $sec1['sec_razao'] = $l['sec_razao_social'];
            $sec1['sec_nm_fantasia'] = $l['sec_nome_fantasia'];

            $sec[$i] = $sec1;
            $i++;
        }
?>

<html>
    <head>
        <meta charset="utf-8"> 
        <link rel="stylesheet" type="text/css" href="<?php echo LIB_PATH; ?>/reveal/reveal.css">    
        <link rel="stylesheet" type="text/css" href="<?php echo LIB_PATH; ?>/css/style.min.css">
        <!-- Reveal Modal Plugin só funciona com jquery 1.6... -->
        <script type="text/javascript" src="<?php echo LIB_PATH; ?>/js/jquery_legacy_1.6.min.js"></script>
        <script src="<?php echo LIB_PATH; ?>/reveal/jquery.reveal.js"></script>
        <script src="<?php echo LIB_PATH; ?>/js/tecpar.min.js"></script>
    </head>    
    <body>
        <div id="container">
            <div id="content">                
                <form id="con_form" method="POST" action="<?php echo PROJECT_URL; ?>ws_joomla/ctrl/ctrl_contatos.php">
                    
                    <?php if($key != 'AC' && $key != 'EX'){ ?>
                    <div class="h_div" id="" style="">
                        
                        <?php
                            if($_GET['ct_sec'] != ''){ ?>
                                <ul>
                                    <li class="con_sec_li">
                                        <label class="" style="margin: 0;"><p>Contatos da Secretaria:</p></label>&nbsp;
                                            <select id="ct_sec" class="slct chosen-select" name="ct_sec" >
                                              <option class="opt_sec" value="">--Selecione</option>
                                                <?php
                                                    foreach ($sec as $sc){ ?>
                                                      <option class="opt_sec" value="<?php echo $sc['sec_id'];?>"><?php echo $sc['sec_nm_fantasia'];?></option>
                                                <?php } ?>
                                            </select>
                                    </li>
                                </ul>
                        <?php }else{ ?>
                                <ul>
                                    <li class="con_sec_li">                    
                                        <label class="" style="margin: 0;"><p>Contatos da Regional:</p></label>&nbsp;
                                            <select id="ct_sec" class="slct chosen-select" name="ct_reg" >
                                              <option class="opt_sec" value="">--Selecione</option>
                                                <?php
                                                    foreach ($regionais as $reg){ ?>
                                                      <option class="opt_sec" value="<?php echo $reg['reg_id'];?>"><?php echo $reg['reg_razao'];?></option>  
                                                <?php } ?>
                                            </select>
                                    </li>
                                </ul>
                        <?php } ?>
                    </div>
                    <?php } ?>

                    <div id="con_content" >

                        <div class="h_div">

                            <table border='0'>

                                <tr>
                                    <td style="text-align: right">Nome:</td>
                                    <td><input type="text" class="" name="ct_nome" size="25" value="<?php echo $contatos['con_nome']; ?>" ></td>

                                    <td style="text-align: right">Sobrenome:</td>
                                    <td colspan="4"><input type="text" class="" name="ct_sobrenome" size="42" value="<?php echo $contatos['con_sobrenome']; ?>" ></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right">Email:</td>
                                    <td><input type="text" class="" name="ct_email" size="25" value=""></td>

                                    <td style="text-align: right">Telefone:</td>
                                    <td><input type="text" class="" name="ct_telefone" size="8"style="float: left;" value="<?php echo $contatos['con_telefone']; ?>"></td>

                                    <td style="text-align: right">Celular:</td>
                                    <td><input type="text" class="" name="ct_celular" size="8" style="float: left;" value="<?php echo $contatos['con_celular']; ?>"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: right">Cargo:</td>
                                    <td colspan="5">
                                        <input type="text" class="" name="ct_cargo" size="25" style="float: left;" value="<?php echo $contatos['con_cargo']; ?>">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="5"> 
                                        
                                        <?php if($key == 'AC'){ ?>
                                        
<!--                                               
                                            <a href="http://sugar.tecpar.br/portaldocliente/index.php/manutencao-de-contatos" style="text-decoration: none;">
                                                <div class="bt_default con_alterar">
                                                    <p>Nova pesquisa</p>
                                                </div>
                                            </a>-->
                                        
                                            <div class="bt_default con_alterar bt_submit">
                                                <p>Alterar</p>
                                            </div>

                                            <?php
                                                if($_REQUEST['sec_id'] != ''){ ?>
                                                    <td ><input type="hidden" class="" name="ct_id" style="float: left;" value="<?php echo $contatos['con_id']; ?>"></td>
                                                    <td ><input type="hidden" class="" name="ct_sec" style="float: left;" value="<?php echo $_REQUEST['sec_id']; ?>"></td>
                                            <?php }else{ ?>
                                                    <td ><input type="hidden" class="" name="ct_id" style="float: left;" value="<?php echo $contatos['con_id']; ?>"></td>
                                                    <td ><input type="hidden" class="" name="ct_reg" style="float: left;" value="<?php echo $_REQUEST['regional_id']; ?>"></td>
                                            <?php } ?>


                                            <td ><input type="hidden" value="A" class="" name="acao" style="float: left;"></td>
                                            <td ><input type="hidden" value="AL" class="" name="key" style="float: left;"></td>    
                                                
                                            <?php }else if($key == 'EX'){ ?>
                                                <div class="bt_default con_alterar bt_submit">
                                                    <p>Excluir</p>
                                                </div>
                                                <?php if($_REQUEST['sec_id'] != ''){ ?>
                                                    <td><input type="hidden" value="<?php echo $_REQUEST['sec_id']; ?>" class="" name="ct_sec" style="float: left;"></td>
                                
                                                <?php }else{ ?> 
                                                    <td><input type="hidden" value="<?php echo $_REQUEST['regional_id']; ?>" class="" name="ct_reg" style="float: left;"></td>
                                                <?php } ?>
                                                
                                
                                                <td ><input type="hidden" class="" name="ct_id" style="float: left;" value="<?php echo $contatos['con_id']; ?>"></td>
                                                
                                                <td ><input type="hidden" value="E" class="" name="acao" style="float: left;"></td>
                                                <td ><input type="hidden" value="EX" class="" name="key" style="float: left;"></td>
                                
                                            <?php }else{ ?>
                                                
                                                <div class="bt_default con_cadastrar">
                                                    <p>Cadastrar</p>
                                                </div>

                                                <td ><input type="hidden" value="I" class="" name="acao" style="float: left;"></td>    
                                                <td ><input type="hidden" value="IN" class="" name="key" style="float: left;"></td>    
                                                
                                            <?php } ?>

                                    </td>
                                </tr>

                            </table>

                        </div>

                    </div>
                    
                </form>
                
            </div>
        </div>

    </body>
    
</html>