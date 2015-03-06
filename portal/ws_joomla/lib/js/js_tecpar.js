$(function(){
    
    function montaTelaUpLoad(data){



          if(data.status === 'vazio'){

              var html = "";

                  html += "<div style='clear: both'></div>";
                  html += "<fieldset id='fieldset_form_pedido' class=''>";
                  html += "<legend style='width: 36%;'><p>Informações do Boleto</p></legend>";
                  html += "<ul class='dsp_ul' style='font: normal 20px/15px  verdana, arial; padding: 0;'>";
                  html += "<li class='dsp_li'>";
                  html += 'Código não possui boletos';
                  html += "</li>";
                  html += "<div id='n_pesquisa' onclick='reLoad()' class='n_pesquisa'>Nova Pesquisa</div>";

                  $('#result').html(html);

              }else{

                  var html = "";

                  html += "<div style='clear: both'></div>";
                  html += "<fieldset id='fieldset_form_pedido' class=''>";
                  html += "<legend style='width: 35%;'><p>Informações do Boleto</p></legend>";
                  html += "<ul class='dsp_ul' style='font: normal 20px/15px  verdana, arial; padding: 0;'>";
                  html += "<li class='dsp_li_info' style='text-align: right'>Identificação do Boleto: &nbsp;</li>";
                  html += "<li class='dsp_li'>";
                  html += data[0].id_arquivo;
                  html += "<input type='hidden' name='ped_codigo_boleto' value=" + data[0].id_arquivo +">";
                  html += "</li>";
                  
                  if(data[0].cat === 'P'){
                      
                    if(data[0].sec_origem !== ' '){

                        html += "<li class='dsp_li_info' style='text-align: right'>Sec Origem: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].nm_sec_origem;
                        html += "<input type='hidden' name='ped_sec_origem' value=" + data[0].sec_origem + ">";
                        html += "</li>";

                    } else if(data[0].reg_origem !== ' '){

                        html += "<li class='dsp_li_info' style='text-align: right'>Reg Origem: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].nm_reg_origem;
                        html += "<input type='hidden' name='ped_reg_origem' value=" + data[0].reg_origem + ">";
                        html += "</li>";

                    }
                    
                    if(data[0].reg_destino !== ' '){

                        html += "<li class='dsp_li_info' style='text-align: right'>Regional Destino: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].reg_destino;
                        html += "<input type='hidden' name='ped_reg_destino' value=" + data[0].reg_destino + ">";
                        html += "</li>";

                    }else if(data[0].id_cliente !== ' '){

                        html += "<li class='dsp_li_info' style='text-align: right'>Cliente Destino: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].nm_cliente;
                        html += "<input type='hidden' name='ped_nm_razao' value=" + data[0].id_cliente + ">";
                        html += "</li>";

                    }else{
                        html += "<li class='dsp_li_info' style='text-align: right'>Cliente Destino: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].nm_sec_destino;
                        html += "<input type='hidden' name='ped_nm_razao' value=" + data[0].sec_destino + ">";
                        html += "</li>";
                    }

                  }else if(data[0].cat === 'I'){
                    if(data[0].secretaria !== ' '){
                        html += "<li class='dsp_li_info' style='text-align: right'>Sec Origem: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].secretaria;
                        html += "<input type='hidden' name='ped_sec_origem' value=" + data[0].sec_origem + ">";
                        html += "</li>";

                    } else if(data[0].regional !== ' '){
                        html += "<li class='dsp_li_info' style='text-align: right'>Reg Origem: &nbsp;</li>";
                        html += "<li class='dsp_li'>";
                        html += data[0].regional;
                        html += "<input type='hidden' name='ped_reg_origem' value=" + data[0].reg_origem + ">";
                        html += "</li>";

                    }
                  }

              html += "</ul>";
              html += "</fieldset>";

//                    html += data[1].lista_lote;

              html += "<fieldset id='fieldset_form_pedido' class=''>";
              html += "<legend><p>Pedido</p></legend>";

              html += "<ul class='dsp_ul' style='font: normal 20px/15px  verdana, arial; padding: 0;'>";
              
            if(data[0].cat === 'P'){
              
              html += "<li class='dsp_li' style='text-align: center; width: 15%;'>QNT</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 64.4%; border-right: 2px #f1f1f1 solid; border-left: 2px #f1f1f1 solid; '>PRODUTO</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 20%;'>LOTE</li>";

            }else if(data[0].cat === 'I'){
              
              html += "<li class='dsp_li' style='text-align: center; width: 6%;'>Qnt</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 22%; border-left: 2px #f1f1f1 solid;'>Nome</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 22%; border-left: 2px #f1f1f1 solid; '>Motivo</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 15%; border-left: 2px #f1f1f1 solid;'>Lote</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 18%; border-left: 2px #f1f1f1 solid;'>Reg</li>";
              html += "<li class='dsp_li' style='text-align: center; width: 17%; border-left: 2px #f1f1f1 solid;'>Sec</li>";
  
            }
            
              html += "</ul>";
              html += "<ul class='dsp_ul' style='font: normal 20px/15px  verdana, arial; padding: 0;'>";

              
                  
                  if(data[0].cat === 'P'){

                    for($i=1; $i < data.length; $i++){
                        
                        html += "<li class='dsp_li' style='text-align: center; width: 15%; height: 70px'>" + data[$i].quantidade + "</li>";
                        html += "<input type='hidden' name='ped_quantidade[]' value='" + data[$i].quantidade + "'>";
                        html += "<li class='dsp_li' style='text-align: center; width: 64.4%; border-right: 2px #f1f1f1 solid; height: 70px; border-left: 2px #f1f1f1 solid; '>" + data[$i].pd_nome + "</li>";
                        html += "<li class='dsp_li' style='text-align: center; width: 20%; height: 70px'>" + data[$i].lista_lote +"</li>";
                        html += "<input type='hidden' name='ped_codigo_boleto' value='" + data[$i].cod_boleto + "'>";
                        html += "<input type='hidden' name='ped_produto[]' value='" + data[$i].pd_id + "'>";
                        html += "<input type='hidden' name='ped_lote[]' value='" + data[$i].lista_lote +"'>";
                    }      

                  }else if(data[0].cat === 'I'){

                    for($i=0; $i < data.length; $i++){
                        html += "<li class='dsp_li' style='text-align: center; width: 6%; height: 70px'>" + data[$i].quantidade + "</li>";
                        html += "<input type='hidden' name='ped_quantidade[]' value='" + data[$i].pd_nome + "'>";
                        html += "<li class='dsp_li' style='text-align: center; width: 22%; border-left: 2px #f1f1f1 solid; height: 70px; border-left: 2px #f1f1f1 solid; '>" + data[$i].pd_nome + "</li>";
                        html += "<li class='dsp_li' style='text-align: center; width: 22%; border-left: 2px #f1f1f1 solid; height: 70px'>" + data[$i].motivo +"</li>";
                        html += "<li class='dsp_li' style='text-align: center; width: 15%; border-left: 2px #f1f1f1 solid; height: 70px'>" + data[$i].lote +"</li>";
                        html += "<li class='dsp_li' style='text-align: center; width: 18%; border-left: 2px #f1f1f1 solid; height: 70px'>" + data[$i].regional +"</li>";
                        html += "<li class='dsp_li' style='text-align: center; width: 17%; border-left: 2px #f1f1f1 solid; height: 70px'>" + data[$i].secretaria +"</li>";
                        html += "<input type='hidden' name='ped_codigo_boleto' value='" + data[$i].cod_boleto + "'>";
                        html += "<input type='hidden' name='ped_produto[]' value='" + data[$i].pd_id + "'>";
                        html += "<input type='hidden' name='ped_lote[]' value='" + data[$i].lista_lote +"'>";                        
                    }

                  }
              
              html += "</ul>";

              html += "</fieldset>";

              html += "<div id='h_valor_total' style='float: left; width: 100%; color: #008B5A; border-bottom: 2px #f1f1f1 solid; '>";
    //     
    //<!--            <h3 style="float: left"></h3>-->
    //
            if(data[0].cat === 'P'){
              html += "<h3 style='font: normal 24px verdana, arial;'> Valor Total:&nbsp; R$&nbsp;<span id='ped_valor_total_txt'>" + data[0].valor_total + "</span></h3>";
              html += "<input name='ped_valor_total' id='id_ped_valor_total' type='hidden' value='" + data[0].valor_total + "'>";                
            }

              html += "</div>";
              html += "<input type='file' name='arquivo' id='arquivo'>";
              
              html += "<div>";
              html += "<input type='submit' value='Enviar Arquivo' name='submit'>";
              html += "</div>";
              

              $('#result').html(html);
              }

//        return;

    }
    
    $('#enviar_contato').click(function(){
                   $('#chronoform-contatos').submit();
    });

    $('#arquivo').click(function (){
       alert('opa ahoi!'); 
    });
    
    $('.cat').click(function(){
        var cod_file = $('#cod_file').val();

        if(cod_file !== ''){
            $('#bt_azul').fadeIn();
        }

    });

    $('#cod_file').blur(function(){

        var cat = $('.cat').val();

        if(cat !== ''){
            $('#bt_azul').fadeIn();
        }

    });


    function getRadialVal(classe){
        var rcat = '.' + classe;
        var val = $(rcat + ':checked').val();

        return val;
    }

    function getInputTextVal(classe){
        var txtcat = '.' + classe;
        var val = $(txtcat).val();

        return val;
    }

    function geraUrlUploadFile(radial,txt){

        var url = '../ws_joomla/ctrl/ctrl_upload.php?categoria=' + getRadialVal(radial) + '&cod_arquivo=' + getInputTextVal(txt) + '&acao=U';

        return url;
    }

    $('#bt_azul').click(function(){ //Quando clicado no elemento input

        var cod_file = $('#cod_file').val();

      if(cod_file !== ''){

          $.ajax({
              url: geraUrlUploadFile('cat','cod_file'),
              dataType : "json",
              success: function(data) {
                  montaTelaUpLoad(data);
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

   $('#cod_file').keyup(function(){

      var valor = $(this).val().replace(/[^0-9]+/g,'');
      $(this).val(valor);

   });
    
    // ADICIONANDO PEDIDO //
    $('#adicionar').click(function(){
        novoCampo = $('#ul_list').clone().insertAfter(".ul_list:last");
        novoCampo.find("input").val("");
        novoCampo.find("span").html("");
        removeCampo();
        multiplicar();
        somenteNumeros();
        somaTudo();
        limpaProduto();
    });

    //Para seleções 
    $(".chosen-select").chosen();

    // Regra de negocios da pagina PEDIDO
    //Opção de Origem
        $('.op_origem').click(function(){

            $('.ori_check').removeClass('no_checked'); 

            $('#sdn').hide();

            $('.ori').css({
                backgroundColor:   '#fafafa',
                borderTop:         '2px solid #eeeeee',
                marginTop:         '15px'
            });

            var origem = $(this).val();

            $('#form-row-6').fadeIn();

            if(origem == 'regional'){
                $('.slct').val('');    
                $('.slct').hide();                
                $('.dest_pedido').hide();
                $('#form-row-50').fadeIn();
                $('#nm_destino').fadeIn();
                $('.op_destino').hide();
                $('.reg').hide();
                $('.sec').hide();
                $('.cli').fadeIn();

            }else if(origem == 'secretaria'){
                $('.slct').val('');
                $('.slct').hide();
                $('.dest_pedido').hide();
                $('#form-row-4').fadeIn();
                $('#reg_destino').fadeIn();
                $('.op_destino').fadeIn();
                $('.reg').fadeIn();
                $('.cli').fadeIn();
                $('.sec').hide();

            }else if(origem === 'tecpar'){
                $('.slct').val('');
                $('.slct').hide();
                $('.dest_pedido').hide();
                $('.reg').hide();
                $('.sec').fadeIn();
                $('.cli').hide();
            }
        });


    // Definindo Destino
        $('.destinatario').click(function(){

            $('.dest_check').removeClass('no_checked');

            $('.dest').css({
              backgroundColor:   '#fafafa',
              borderTop:         '2px solid #eeeeee',
              marginTop:         '15px'
            });

            var destinatario = $(this).val();

            if(destinatario == 'regional'){
                $('.dest_pedido').hide();
                $('.dest_pedido').val('');
                $('#fin-fld51').fadeIn();
                $('#form-row-51').fadeIn();
                $('#form-row-8').fadeIn();

            }else if(destinatario == 'secretaria'){
                $('.dest_pedido').hide();
                $('.dest_pedido').val('');
                $('#fin-fld404').fadeIn();
                $('#form-row-8').fadeIn();

            }else{
                $('.dest_pedido').hide();
                $('.dest_pedido').val('');
                $('#fin-fld7').fadeIn();
                $('#form-row-8').fadeIn();
               
            }

        });

        $('#form-row-4').hide();
        $('#form-row-6').hide();
        $('#form-row-8').hide();
        $('#form-row-50').hide();
        $('#form-row-51').hide();


    // VALIDANDO CAMPOS

    //SOMENTE NÚMEROS
    $('.quantidade').keyup(function(){
        var valor = $('.quantidade').val().replace(/[^0-9]+/g,'');
        $(this).val(valor);
    });
    
    
    // REGATAR O VALOR TOTAL
    
    
    
    // FORMA PARA VÁRIOS CAMPOS DE PEDIDOS SIMULTANEOS //
    function somenteNumeros(){
        $('.quantidade').unbind('keyup');
        $('.quantidade').bind('keyup', function(){

            var valor = $(this).val().replace(/[^0-9]+/g,'');
            $(this).val(valor);

        });
    }
        
    // RETIRANDOCLASSE DOS SELECTS //
    $('#secretaria').click(function (){
       $(this).removeClass('input_erro');
    });
    

    //VERIFICANDO CAMPOS AO ENVIAR
    $('#enviar').click(function(){
        
        somaTudo();
        
        if($('.op_origem').is(':checked')){
        }else{
            $('.ori_check').addClass('no_checked'); 
        }
        
        if($('.destinatario').is(':checked')){    
        }else{
            $('.dest_check').addClass('no_checked'); 
        }
                
        $('.quantidade').each(function(){

            if($(this).val() == ''){
                $(this).addClass('input_erro');
              }else{
                $(this).removeClass('input_erro');
              }

        });

        $('.produto').each(function(){

          if($(this).val() == ''){
            $(this).addClass('input_erro');

          }else{
            $(this).removeClass('input_erro');
          }

        });

        $('.lote').each(function(){
            
                var origem = $('.op_origem:checked').val();

        
          if(origem !== 'tecpar'){
            if($(this).val() == ''){
              $(this).addClass('input_erro');

            }else{
              $(this).removeClass('input_erro');
            }
          }


        });
        
        
        if($('.lote').hasClass('input_erro') == false && 
           $('.produto').hasClass('input_erro') == false && 
           $('.quantidade').hasClass('input_erro') == false &&
           $('.ori_check').hasClass('no_checked') == false &&
           $('.dest_check').hasClass('no_checked') == false 
           ) {
            $('#chronoform-n_ped').submit(); 
//            alert('vai mandar');   
        }
        
    });

    //Excluir pedido
    // FORMA PARA VÁRIOS CAMPOS DE PEDIDOS SIMULTANEOS //
        function removeCampo(){
            
            $(".excluir").unbind("click");
            $(".excluir").bind("click", function(){
               if($(".ul_list").length > 1){
                 $(this).parent().parent().remove();
               }
               
               somaTudo();
               
            });
        }
        

        // MULTIPLICANDO QUANTIDADE/VALOR UNITÁRIO //
        $('.prod_opt').click(function(){
            
            var val_unit = $(this).attr('val_unit');
            var quantidade = $(this).parent().parent().parent().children('#quantidade').children().val();
            var result = val_unit*quantidade;
            var resultado_final = result.toFixed(2);

            $(this).parent().parent().parent().children('#valor_total').children().val(resultado_final);
            $(this).parent().parent().parent().children('#valor_unitario').children('.valor_unitario').val(val_unit);
            $(this).parent().parent().parent().children('#valor_unitario').children('.sp_val_unit').html(val_unit); 
            $(this).parent().parent().parent().children('#valor_total').children('.sp_val_total').html(resultado_final); 
            
            somaTudo();
            
        });
            
        // FORMA PARA VÁRIOS CAMPOS DE PEDIDOS SIMULTANEOS //
        function multiplicar(){
            $('.prod_opt').unbind('click');
            $('.prod_opt').bind('click', function(){

                var val_unit = $(this).attr('val_unit');
                var quantidade = $(this).parent().parent().parent().children('#quantidade').children().val();
                var result = val_unit*quantidade;
                var resultado_final = result.toFixed(2);
                

                $(this).parent().parent().parent().children('#valor_total').children().val(resultado_final);
//                $(this).parent().parent().parent().children('#valor_total').children().val(val_unit*quantidade);
                $(this).parent().parent().parent().children('#valor_unitario').children().val(val_unit);
                $(this).parent().parent().parent().children('#valor_unitario').children('.sp_val_unit').html(val_unit);
                $(this).parent().parent().parent().children('#valor_total').children('.sp_val_total').html(resultado_final);
                
                somaTudo();
                
            });
        }
        
        // PARA LIMPAR O PRODUTO E FORÇAR USUÁRIO PREENCHE-LO NOVAMENTE //
        function limpaProduto(){
            $('.quantidade').unbind('click');
            $('.quantidade' ).bind('click',function (){
                $(this).parent().parent().children('#produto').children().val('');
                $(this).parent().parent().children('#valor_unitario').children().val('');
                $(this).parent().parent().children('#valor_total').children().val('');
                
                somaTudo();
                
            });
        }
        
        $('.quantidade').focus(function(){
            limpaProduto();
            somaTudo();
        });
        
        // SOMANDO TODOS OS VALORES //
        function somaTudo(){
                    
            var total = 0;

            $('.valor_total').each(function(){
                var valor = Number($(this).val());
                if (!isNaN(valor)) total += valor;
            });

            $("#ped_valor_total_txt").html(total.toFixed(2));
            
            $('#id_ped_valor_total').val(total.toFixed(2));
            
        }
       
        //CONJUNTO DE FUNÇÕES PARA FAZER UPLOAD DE ARQUIVOS

        //FUNÇÃO QUE RESGATA O VALOR DE UM CAMPO RADIAL
        function getRadialVal(classe){
            var rcat = '.' + classe;
            var val = $(rcat + ':checked').val();

            return val;
        }

        //FUNÇÃO QUE RESGATA O VALOR DE UM CAMPO DE TEXTO
        function getInputTextVal(classe){
            var txtcat = '.' + classe;
            var val = $(txtcat).val();

            return val;
        }


        //FUNÇÃO QUE GERA UMA URL DETERMINADA PARA UPLOAD DE ARQUIVO
        function geraUrlUploadFile(radial,txt){

            var url = '../ws_joomla/ctrl/ctrl_upload.php?categoria=' + getRadialVal(radial) + '&cod_arquivo=' + getInputTextVal(txt) + '&acao=U';

            return url;
        }
        
        $('#bt_upload').click(function(){ //Quando clicado no elemento input
          alert('ojiajsisisiisis');
//        $.ajax({
//              url: geraUrlUploadFile('cat', 'cod_file'),
//              success: function(data) {
//                $('div').html(data);
//                //alert(data);
//              },
//              beforeSend: function(){
//                $('.loader').css({display:"block"});
//              },
//              complete: function(){
//                $('.loader').css({display:"none"});
//              }
//        });

        });
    
    });