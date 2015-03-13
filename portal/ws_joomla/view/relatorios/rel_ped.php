<link rel="stylesheet" href="<?php echo LIB_PATH; ?>/jquery-ui/jquery-ui.css">
<script src="<?php echo LIB_PATH; ?>/js/jquery.min.js"></script>
<script src="<?php echo LIB_PATH; ?>/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo LIB_PATH; ?>/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo LIB_PATH; ?>/chosen/chosen.min.css">

<script type="text/javascript">
    $(function(){
        $(".chosen-select").chosen();
    });
</script>

<script>
    $(function() {

        $( "#calendario_inicio" ).datepicker({
            defaultDate: "+1w",
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
              $( "#calendario_fim" ).datepicker( "option", "minDate", selectedDate );
            }
          });
          $( "#calendario_fim" ).datepicker({
            defaultDate: "+1w",
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            numberOfMonths: 2,
            onClose: function( selectedDate ) {
              $( "#calendario_inicio" ).datepicker( "option", "maxDate", selectedDate );
            }
          });

        $(".chosen-select").chosen();
    });
</script>

<style>
.calendario {
    padding: 5px 5px 5px 5px;
    border-radius: 5px;
    background-image: url(http://www.viajartemporada.com.br/images/iconCalendario.png);
    background-repeat:no-repeat;
    background-position: right;
</style>

        <?php
        include_once '../../model/conexao.class.php';
        /*
            $con=mysqli_connect("localhost","ambientelivre","sugarsql123","homologacao_sugarcrm");
            // Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
*/
                $sql = "SELECT * FROM ant_secretarias WHERE deleted=0";

                $result = mysql_query($sql);   

                $produtos = array();
                $produtos1 = array();

                $i = 0;

                while($l = mysql_fetch_array($result)){
                    $secretarias1['1'] = $l['id'];
                    $secretarias1['2'] = $l['sec_razao_social'];

                    $secretarias[$i] = $secretarias1;
                    $i++;

                } 
/*                
                $con=mysqli_connect("localhost","ambientelivre","sugarsql123","homologacao_sugarcrm");
                // Check connection
                if (mysqli_connect_errno()) {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
*/
                    $sql = "SELECT * FROM ant_regionais  WHERE deleted=0";

                    $result = mysql_query($sql);   

                    $produtos = array();
                    $produtos1 = array();

                    $i = 0;

                    while($l = mysql_fetch_array($result)){
                        $regional1['1'] = $l['id'];
                        $regional1['2'] = $l['reg_razao_social'];

                        $regional[$i] = $regional1;
                        $i++;

                    } 
                    
                    $sql = "SELECT * FROM ant_cliente WHERE deleted = 0";
                    
                        $result = mysql_query($sql);   

                        $clientes = array();
                        $clientes1 = array();

                        $i = 0;

                        while($l = mysql_fetch_array($result)){
                            $clientes1['1'] = $l['id'];
                            $clientes1['2'] = $l['name'];

                            $clientes[$i] = $clientes1;
                            $i++;

                        }
                        
                    ?>

<div class="form-group gcore-form-row" id="form-row-2">
    <label for="fld1" class="control-label gcore-label-left">Secretaria Origem</label>
    
    <div class="gcore-input gcore-display-table" id="fin-fld1">

        <select name ="ped_sec_origem" data-placeholder="Escolha uma secretaria..." class="chosen-select"  tabindex="4">

            <option value="">-- Selecione</option>

            <?php

            foreach ($secretarias as $p){ 
                ?>
                <option value="<?php echo $p['1'];?>"><?php echo $p['2'];?></option>
            <?php } ?>

        </select>
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-4">
    <label for="fld3" class="control-label gcore-label-left">Regional Origem</label>
    <div class="gcore-input gcore-display-table" id="fin-fld3">

        <select name ="ped_reg_origem" data-placeholder="Escolha uma regional" class="chosen-select"  tabindex="4">
           <option value="">-- Selecione</option>

           <?php

           foreach ($regional as $r){ 
               ?>
               <option value="<?php echo $r['1'];?>"><?php echo $r['2'];?></option>
           <?php } ?>

       </select> 
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-21">
    <label for="fld1" class="control-label gcore-label-left">Secretaria Destino</label>
    
    <div class="gcore-input gcore-display-table" id="fin-fld1">

        <select name ="ped_sec_destino" data-placeholder="Escolha uma secretaria..." class="chosen-select"  tabindex="4">

            <option value="">-- Selecione</option>

            <?php

            foreach ($secretarias as $p){ 
                ?>
                <option value="<?php echo $p['1'];?>"><?php echo $p['2'];?></option>
            <?php } ?>

        </select>
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-41">
    <label for="fld3" class="control-label gcore-label-left">Regional Destino</label>
    <div class="gcore-input gcore-display-table" id="fin-fld3">

        <select name ="ped_reg_destino" data-placeholder="Escolha uma regional" class="chosen-select"  tabindex="4">
           <option value="">-- Selecione</option>

           <?php

           foreach ($regional as $r){ 
               ?>
               <option value="<?php echo $r['1'];?>"><?php echo $r['2'];?></option>
           <?php } ?>

        </select> 
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-42">
    <label for="fld3" class="control-label gcore-label-left">Cliente Destino</label>
    <div class="gcore-input gcore-display-table" id="fin-fld3">

        <select name ="ped_clie_destino" data-placeholder="Escolha um cliente" class="chosen-select"  tabindex="4">
           <option value="">-- Selecione</option>

           <?php

           foreach ($clientes as $c){ 
               ?>
               <option value="<?php echo $c['1'];?>"><?php echo $c['2'];?></option>
           <?php } ?>

        </select> 
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-7">
    <label for="status" class="control-label gcore-label-left">Status</label>
    <div class="gcore-input gcore-display-table" id="fin-status">
        <select name="ped_status" id="status" size="" class="form-control A" title="" style="" data-load-state="" data-tooltip="">
            <option value="Pendente">Pendente</option>
            <option value="Entregue">Entregue</option>
            <option value="Pago">Pago</option>
            <option value="Cancelado">Cancelado</option>
        </select>
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-9">
    <label for="fld8" class="control-label gcore-label-left">Data Início</label>
    <div class="gcore-input gcore-display-table" id="fin-fld8">
        <input type="text" id="calendario_inicio" name="in_data_inicio" class="calendario" syze="15" maxlength = "10"/>
    </div>
    
</div>

<div class="form-group gcore-form-row" id="form-row-11">
    <label for="fld10" class="control-label gcore-label-left">Data Fim</label>
    <div class="gcore-input gcore-display-table" id="fin-fld10">
        <input type="text" id="calendario_fim" name="in_data_fim" class="calendario" syze="15" maxlength = "10"/>
        <input type="hidden" name="acao" value="REL_PEDIDO">
    </div>
</div>

<div class="form-group gcore-form-row" id="form-row-12">
    <div class="gcore-input gcore-display-table" id="fin-gerar_relatorio">
        <input name="gerar_relatorio" id="gerar_relatorio" type="submit" value="Gerar Relatório" class="form-control A" style="" data-load-state="" />
    </div>
</div>