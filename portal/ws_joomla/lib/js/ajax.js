$(function(){

// AJAX PARA MANUTENÇÃO DE CLIENTE

    function geraUrlUploadFile(radial,txt){

        var url = 'http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_upload.php?categoria=' + getRadialVal(radial) + '&cod_arquivo=' + getInputTextVal(txt) + '&acao=U';

        return url;
    }
    
    

    $('#p_cliente').click(function(){ //Quando clicado no elemento input

        var cliente = $('#select_cliente').val();

      if(cliente !== ''){

          $.ajax({
              url: 'http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_cliente_veterinario.php?acao=B&cliente=' + cliente,
              dataType : "json",
              success: function(cliente) {
                  montaTelaCliente(cliente);
              },

              beforeSend: function(){
                  
                $('.loader').css({display:"block"});
                $('.esconder').hide();

              },

              complete: function(){
                $('.loader').css({display:"none"});
              }
          });
      }else{

          $('#cod_file').val('Campo necessário');
      }

    });
    
    function montaTelaCliente(cliente){
        
        var html = "";
        
    //MONTA ATIVO/INATIVO    
        html += "<div class='form-group gcore-form-row' id='form-row-ativo'>";
        html += "<label for='ativo' class='control-label gcore-label-left gcore-label-checkbox'>Status</label>";
        html += "<div class='gcore-input-wide gcore-display-table' id='fin-ativo'>";
        html += "<div class='gcore-multiple-column' id='fclmn'>";
        html += "<div class='gcore-radio-item' id='fitem'>";
        html += "<input name='ativo' id='ativo' value='0' class='A' title='' style='' data-load-state='' data-tooltip='' type='radio' />";
        html += "<label class='control-label gcore-label-checkbox' for='ativo'>Ativo</label>";
        html += "</div>";
        html += "<div class='gcore-radio-item' id='fitem1'>";
        html += "<input name='ativo' id='ativo1' value='1' class='A' title='' style='' data-load-state='' data-tooltip='' type='radio' />";
        html += "<label class='control-label gcore-label-checkbox' for='ativo1'>Inativo</label>";
        html += "</div>";
        html += "</div>";
        html += "</div>";
        html += "</div>";

    //MONTA RAZAO/NOME
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_nm_razao'>";
        html += "<label for='id_cli_nm_razao' class='control-label gcore-label-left'>Razão/Nome </label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_nm_razao'>";
        html += "<input name='cli_nm_razao' id='id_cli_nm_razao' value='" + cliente.cli_razao + "' placeholder='' maxlength='100' size='55' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Razão Social / Nome Completo' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
        
    //MONTA NOME FANTASIA
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_nm_fantasia'>";
        html += "<label for='id_cli_nm_fantasia' class='control-label gcore-label-left'>Nome Fantasia</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_nm_fantasia'>";
        html += "<input name='cli_nm_fantasia' id='id_cli_nm_fantasia' value='" + cliente.cli_nm_fantasia + "' placeholder='' maxlength='100' size='55' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Nome Fantasia' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
        
    //MONTA CEP
        html += "<div class='form-group gcore-form-row' id='form-row-custom2'>";
        html += "<label for='custom2' class='control-label gcore-label-left'>CEP</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-custom2'>";
        html += "<input id='id_cli_cep' name='id_cli_cep' onblur='consultacep(this.value)' value='" + cliente.cep + "'  class='form-control A' title='Campo Obrigatório: CEP' />";
        html += "</div>";
        html += "</div>";
        
    // MONTA BAIRRO
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_bairro'>";
        html += "<label for='id_cli_bairro' class='control-label gcore-label-left'>Bairro</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_bairro'>";
        html += "<input name='cli_bairro' id='id_cli_bairro' value='" + cliente.cli_bairro + "' placeholder='' maxlength='100' size='50' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Bairro' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";

    // MONTA CIDADE
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_cidade'>";
        html += "<label for='id_cli_cidade' class='control-label gcore-label-left'>Cidade</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_cidade'>";
        html += "<input name='cli_cidade' id='id_cli_cidade' value='" + cliente.cli_cidade + "' placeholder='' maxlength='100' size='50' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Cidade' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
    
    // MONTA ESTADO        
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_estado'>";
        html += "<label for='id_cli_estado' class='control-label gcore-label-left'>Estado</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_estado'>";
        html += "<select name='cli_estado' id='id_cli_estado' size='' class='form-control A' title='' style='' data-load-state='' data-tooltip=''>";
        html += "<option value='AC'>AC</option>";
        html += "<option value='AL'>AL</option>";
        html += "<option value='AM'>AM</option>";
        html += "<option value='AP'>AP</option>";
        html += "<option value='BA'>BA</option>";
        html += "<option value='CE'>CE</option>";
        html += "<option value='DF'>DF</option>";
        html += "<option value='ES'>ES</option>";
        html += "<option value='GO'>GO</option>";
        html += "<option value='MA'>MA</option>";
        html += "<option value='MT'>MT</option>";
        html += "<option value='MS'>MS</option>";
        html += "<option value='MG'>MG</option>";
        html += "<option value='PA'>PA</option>";
        html += "<option value='PB'>PB</option>";
        html += "<option value='PR'>PR</option>";
        html += "<option value='PE'>PE</option>";
        html += "<option value='PI'>PI</option>";
        html += "<option value='RJ'>RJ</option>";
        html += "<option value='RN'>RN</option>";
        html += "<option value='RO'>RO</option>";
        html += "<option value='RS'>RS</option>";
        html += "<option value='RR'>RR</option>";
        html += "<option value='SC'>SC</option>";
        html += "<option value='SE'>SE</option>";
        html += "<option value='SP'>SP</option>";
        html += "<option value='TO'>TO</option>";
        html += "</select>";
        html += "</div>";
        html += "</div>";
        
    // MONTA TIPO LOGRADOURO
        html += "<div class='form-group gcore-form-row' id='form-row-id_clie_tp_logradouro'>";
        html += "<label for='id_clie_tp_logradouro' class='control-label gcore-label-left'>Tipo logradouro</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_clie_tp_logradouro'>";
        html += "<select name='clie_tp_logradouro' id='id_clie_tp_logradouro' size='' class='form-control A' title='' style='' data-load-state='' data-tooltip=''>";
        html += "<option value='Rua'>Rua</option>";
        html += "<option value='Avenida'>Avenida</option>";
        html += "<option value='Rodovia'>Rodovia</option>";
        html += "<option value='Travessa'>Travessa</option>";
        html += "<option value='Praça'>Praça</option>";
        html += "<option value='Quadra'>Quadra</option>";
        html += "<option value='Alameda'>Alameda</option>";
        html += "<option value='Beco'>Beco</option>";
        html += "<option value='Vila'>Vila</option>";
        html += "<option value='Estrada'>Estrada</option>";
        html += "<option value='Passagem'>Passagem</option>";
        html += "<option value='Viela'>Viela</option>";
        html += "<option value='Servidão'>Servidão</option>";
        html += "</select>";
        html += "</div>";
        html += "</div>";
        
    // MONTA LOGRADOURO
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_logradouro'>";
        html += "<label for='id_cli_logradouro' class='control-label gcore-label-left'>Logradouro</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_logradouro'>";
        html += "<input name='cli_logradouro' id='id_cli_logradouro' value='" + cliente.cli_logradouro + "' placeholder='' maxlength='256' size='50' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório:  Logradouro.' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
    
    // MONTA NÚMERO    
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_numero'>";
        html += "<label for='id_cli_numero' class='control-label gcore-label-left'>Número</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_numero'>";
        html += "<input name='cli_numero' id='id_cli_numero' value='" + cliente.cli_numero + "' placeholder='' maxlength='8' size='8' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Número' style='' data-inputmask='&#039;mask&#039; : &#039;999999&#039;' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
      
    // MONTA COMPLEMENTO        
        html += "<div class='form-group gcore-form-row' id='form-row-id_clie_complemento'>";
        html += "<label for='id_clie_complemento' class='control-label gcore-label-left'>Complemento</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_clie_complemento'>";
        html += "<input name='clie_complemento' id='id_clie_complemento' value='" + cliente.cli_complemento + "' placeholder='' maxlength='' size='' class='form-control A' title='Campo Obrigatório: Complemento' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
        
    // MONTA CPF/CNPJ
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_cnpj_cpf'>";
        html += "<label for='id_cli_cnpj_cpf' class='control-label gcore-label-left'>CNPJ/CPF</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_cnpj_cpf'>";
        html += "<input name='cli_cnpj_cpf' id='id_cli_cnpj_cpf' value='" + cliente.cli_cnpj_cpf +"' placeholder='' maxlength='' size='' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório:  CNPJ/CPF' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";

    // MONTA INSCRIÇÃO ESTADUAL
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_inscricao_estadual'>";
        html += "<label for='id_cli_inscricao_estadual' class='control-label gcore-label-left'>Inscrição Estadual</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_inscricao_estadual'>";
        html += "<input name='cli_inscricao_estadual' id='id_cli_inscricao_estadual' value='" + cliente.nome + "' placeholder='' maxlength='' size='' class='form-control A' title='Campo Obrigatório: IE' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
        
    // MONTA CONTATO
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_contato>";
        html += "<label for='id_cli_contato' class='control-label gcore-label-left'>Contato</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_contato'>";
        html += "<input name='cli_contato' id='id_cli_contato' value='" + cliente.cli_contato + "' placeholder='' maxlength='' size='' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Contato' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";

    // MONTA TELEFONE
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_telefone'>";
        html += "<label for='id_cli_telefone' class='control-label gcore-label-left'>Telefone</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_telefone'>";
        html += "<input name='cli_telefone' id='id_cli_telefone' value='" + cliente.cli_telefone + "' placeholder='' maxlength='' size='' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: Telefone' style='' data-inputmask='&#039;mask&#039; : &#039;(999)9999-99999&#039;' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
    
    // MONTA EMAIL
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_email'>";
        html += "<label for='id_cli_email' class='control-label gcore-label-left'>Email</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_email'>";
        html += "<input name='cli_email' id='id_cli_email' value='" + cliente.cli_email + "' placeholder='' maxlength='' size='' class='validate[&#039;required&#039;] form-control A' title='Campo Obrigatório: E-mail' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
        
    // MONTA CRMV
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_crmv'>";
        html += "<label for='id_cli_crmv' class='control-label gcore-label-left'>CRMV</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_crmv'>";
        html += "<input name='cli_crmv' id='id_cli_crmv' value='" + cliente.cli_crmv + "' placeholder='' maxlength='' size='' class='form-control A' title='' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "</div>";
        html += "</div>";
      
    // MONTA PNCEBT
        html += "<div class='form-group gcore-form-row' id='form-row-id_cli_pncebt'>";
        html += "<label for='id_cli_pncebt' class='control-label gcore-label-left'>PNCEBT</label>";
        html += "<div class='gcore-input gcore-display-table' id='fin-id_cli_pncebt'>";
        html += "<input name='cli_pncebt' id='id_cli_pncebt' value='" + cliente.cli_pncebt + "' placeholder='' maxlength='' size='' class='validate[&#039;required&#039;] form-control A' title='' style='' data-inputmask='' data-load-state='' data-tooltip='' type='text' />";
        html += "<span class='help-block'>Nº da hailitação</span>";
        html += "</div>";
        html += "</div>";
        
        html += "<input type='hidden' value='U' name='acao' id='acao'>";
        html += "<input type='hidden' value='" + cliente.id + "' name='id_cliente' id='id_cliente'>";
        
    // MONTA SUBMIT
        html += "<div class='form-group gcore-form-row' id='form-row-button23'>";
        html += "<div class='gcore-input gcore-display-table' id='fin-button23'>";
        html += "<input name='button23' id='button23' type='submit' value='Salvar' class='form-control A' style='' data-load-state='' />";
        html += "</div>";
        html += "</div>";
        
        
        $('#result').html(html);
        
        $('#id_cli_estado').val(cliente.cli_estado);
        $('#id_clie_tp_logradouro').val(cliente.cli_tp_logradouro);
        
//        $('.A').val(cliente.ativo);

        if(cliente.ativo === '1'){
            $('#ativo').attr('checked',false);
            $('#ativo1').attr('checked',true);
        }else if(cliente.ativo === '0'){
            $('#ativo1').attr('checked',false);
            $('#ativo').attr('checked',true);
        }


        
    }
    
// AJAX UTILIZADO PARA RECUPERAR SECRETARIAS DE ACORDO COM AS PERMISSÕES DO USUARIO



//BUSCA REGIONAL

$('#ct_sec option').click(function(){
   
    var con_sec = $('#ct_sec').val();
   
          $.ajax({
              url: 'http://sugar.tecpar.br/portaldocliente/ws_joomla/ctrl/ctrl_contatos.php?acao=BS&sec=' + con_sec,
              dataType : "json",
              success: function(regionais) {
                  montaRegional(regionais);
              },

              beforeSend: function(){
                $('#con_reg').hide();
                $('.loader').css({display:"block"});
                $('.esconder').hide();

              },

              complete: function(){
                $('.loader').css({display:"none"});
              }
          }); 
          
});

    function montaRegional(regionais){
        
        var html = "";
        
        html += "<li id='con_reg'>";
        html += "<label class='opt_origem' style='margin: 0;'><p>Contatos da secretaria</p></label>&nbsp;";
        html += "<select id='ct_reg' class='' name='ct_reg'>";
        html += "<option class='opt_sec' value=''>--Selecione</option>";
        
        for($i=0; $i < regionais.length; $i++){
            html += "<option class='opt_sec' value='" + regionais[$i].id + "'>" + regionais[$i].nome + "</option>";
        }
        
        html += "</select>";
        html += "</li>";
        
        $(html).insertAfter('.con_sec_li');
     
    }
    
    $('#bt_default').click(function (){
        $('#con_form').submit();
    });
    
});