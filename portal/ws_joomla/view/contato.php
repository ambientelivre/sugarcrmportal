<?php
    include_once '../model/conexao.class.php';

    foreach($_POST as $key => $value) {    
        echo "POST parameter ".$key." has ".$value."<br>";  
    }
    
    $contato = "";
    $acao = "I";    
    if (isset($_POST) && isset($_POST['contato_id']) && isset($_POST['parametro'])) {
        $sql = "SELECT * FROM contacts WHERE id = " . $_POST['contato_id'] . $_POST['parametro'];
        echo $sql;
        $result = mysql_query($sql);
        if ($result) {
            $contato = mysql_fetch_assoc($result);      
            $acao = "A";
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../lib/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="../lib/chosen/chosen.min.css">
        <link rel="stylesheet" href="../lib/css/style.min.css">
        <script src="../lib/js/jquery.min.js"></script>
        <script src="../lib/jquery-ui/jquery-ui.min.js"></script>
        <script src="../lib/chosen/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="../lib/js/tecpar.min.js"></script>
    </head>    
    <body>
        <?php if ($contato != "") { ?>
            <input type="hidden" name="contato_id" value="<?php echo $contato['id']; ?>">        
        <?php } ?>
                        
        <div>            
            <form id="con_form" method="POST" action="../ctrl/ctrl_contatos.php">               
                <table border='0'>
                    <tr>
                        <td style="text-align: right">Nome:</td>
                        <td><input type="text" class="" name="ct_nome" size="25" value="<?php echo $contato['first_name']; ?>" ></td>

                        <td style="text-align: right">Sobrenome:</td>
                        <td colspan="4"><input type="text" class="" name="ct_sobrenome" size="42" value="<?php echo $contatos['last_name']; ?>" ></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Email:</td>
                        <td><input type="text" class="" name="ct_email" size="25" value=""></td>

                        <td style="text-align: right">Telefone:</td>
                        <td><input type="text" class="" name="ct_telefone" size="8"style="float: left;" value="<?php echo $contatos['phone_home']; ?>"></td>

                        <td style="text-align: right">Celular:</td>
                        <td><input type="text" class="" name="ct_celular" size="8" style="float: left;" value="<?php echo $contatos['phone_mobile']; ?>"></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Cargo:</td>
                        <td colspan="5">
                            <input type="text" class="" name="ct_cargo" size="25" style="float: left;" value="<?php echo $contatos['title']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="bt_default">
                                <p>Salvar</p>
                            </div>
                            <input type="hidden" value="<?php echo $acao; ?>" name="acao">
                        </td>
                    </tr>
                </table>                   
            </form>                
        </div>
    </body>    
</html>