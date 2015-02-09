<?php
    $con=mysqli_connect("localhost","ambientelivre","sugarsql123","homologacao_sugarcrm");
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

            $sql = "SELECT * FROM homologacao_sugarcrm.ant_secretarias WHERE deleted=0";

            $result = mysql_query($sql);   

            $produtos = array();
            $produtos1 = array();

            $i = 0;

     while($l = mysql_fetch_array($result)){
                $secretarias1['1'] = $l['id'];
                $secretarias1['2'] = $l['sec_razao_social'];

                $secretarias[$i] = $secretarias1;
                $i++;

            } ?>   
<script type="text/javascript" src="valida_CPF_CNPJ.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="http://harvesthq.github.com/chosen/chosen/chosen.jquery.js"></script>
<link rel="stylesheet" href="http://harvesthq.github.com/chosen/chosen/chosen.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
    $(".chosen-select").chosen();
});
</script>


<style type="text/css">
    @import url(https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.css);
</style>


 <select name ="sec_id" data-placeholder="Escolha uma CFC..." class="chosen-select" style="width:350px;" tabindex="4">

                    <option value="">-- Selecione</option>

                    <?php

                    foreach ($secretarias as $p){ 
                        ?>
                        <option value="<?php echo $p['1'];?>"><?php echo $p['2'];?></option>
                    <?php } ?>

                </select> 
 

