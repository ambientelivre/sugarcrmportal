<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_RAZAO_SOCIAL ' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_razao_social_advanced.value) <= 0}
{assign var="value" value=$fields.reg_razao_social_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_razao_social_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_razao_social_advanced.name}' 
    id='{$fields.reg_razao_social_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Razão Social' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_NM_FANTASIA' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_nm_fantasia_advanced.value) <= 0}
{assign var="value" value=$fields.reg_nm_fantasia_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_nm_fantasia_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_nm_fantasia_advanced.name}' 
    id='{$fields.reg_nm_fantasia_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Nome Fantadia da Regional' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_CNPJ' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_cnpj_advanced.value) <= 0}
{assign var="value" value=$fields.reg_cnpj_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_cnpj_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_cnpj_advanced.name}' 
    id='{$fields.reg_cnpj_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_INSCRICAO_ESTADUAL' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_inscricao_estadual_advanced.value) <= 0}
{assign var="value" value=$fields.reg_inscricao_estadual_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_inscricao_estadual_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_inscricao_estadual_advanced.name}' 
    id='{$fields.reg_inscricao_estadual_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_EMAIL' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_email_advanced.value) <= 0}
{assign var="value" value=$fields.reg_email_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_email_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_email_advanced.name}' 
    id='{$fields.reg_email_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_CONTATO' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_contato_advanced.value) <= 0}
{assign var="value" value=$fields.reg_contato_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_contato_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_contato_advanced.name}' 
    id='{$fields.reg_contato_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_TELEFONE' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_telefone_advanced.value) <= 0}
{assign var="value" value=$fields.reg_telefone_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_telefone_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_telefone_advanced.name}' 
    id='{$fields.reg_telefone_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_ESTADO ' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{html_options name='reg_estado_advanced[]' options=$fields.reg_estado_advanced.options size="6" style="width: 150px" multiple="1" selected=$fields.reg_estado_advanced.value}
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_CIDADE' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_cidade_advanced.value) <= 0}
{assign var="value" value=$fields.reg_cidade_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_cidade_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_cidade_advanced.name}' 
    id='{$fields.reg_cidade_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_CEP' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_cep_advanced.value) <= 0}
{assign var="value" value=$fields.reg_cep_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_cep_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_cep_advanced.name}' 
    id='{$fields.reg_cep_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_BAIRRO' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_bairro_advanced.value) <= 0}
{assign var="value" value=$fields.reg_bairro_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_bairro_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_bairro_advanced.name}' 
    id='{$fields.reg_bairro_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_TP_LOGRADOURO ' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{html_options name='reg_tp_logradouro_advanced[]' options=$fields.reg_tp_logradouro_advanced.options size="6" style="width: 150px" multiple="1" selected=$fields.reg_tp_logradouro_advanced.value}
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_LOGRADOURO' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_logradouro_advanced.value) <= 0}
{assign var="value" value=$fields.reg_logradouro_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_logradouro_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_logradouro_advanced.name}' 
    id='{$fields.reg_logradouro_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_ REG_NUMERO' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_numero_advanced.value) <= 0}
{assign var="value" value=$fields.reg_numero_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_numero_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_numero_advanced.name}' 
    id='{$fields.reg_numero_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_COMPLEMENTO' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_complemento_advanced.value) <= 0}
{assign var="value" value=$fields.reg_complemento_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_complemento_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_complemento_advanced.name}' 
    id='{$fields.reg_complemento_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_REG_CNAE' module='ant_regionais'}
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
{if strlen($fields.reg_cnae_advanced.value) <= 0}
{assign var="value" value=$fields.reg_cnae_advanced.default_value }
{else}
{assign var="value" value=$fields.reg_cnae_advanced.value }
{/if}  
<input type='text' name='{$fields.reg_cnae_advanced.name}' 
    id='{$fields.reg_cnae_advanced.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	</tr>
<tr>
	<td colspan='20'>
		&nbsp;
	</td>
</tr>	
{if $DISPLAY_SAVED_SEARCH}
<tr>
	<td colspan='2'>
		<a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
		<img src='{sugar_getimagepath file="advanced_search.gif"}' id='up_down_img' border=0>&nbsp;{$APP.LNK_SAVED_VIEWS}
		</a><br>
		<input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'><p>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
		{sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:
	</td>
	<td width='30%' nowrap>
		<input type='text' name='saved_search_name'>
		<input type='hidden' name='search_module' value=''>
		<input type='hidden' name='saved_search_action' value=''>
		<input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button' type='button' name='saved_search_submit' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
	    {sugar_translate label='LBL_MODIFY_CURRENT_SEARCH' module='SavedSearch'}:
	</td>
	<td width='30%' nowrap>
		<input class='button' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")' value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update' type='button' >
		<input class='button' onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")' value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete' type='button'>
		<br><span id='curr_search_name'></span>
	</td>
</tr>

<tr>
<td colspan='6'>
<div style='{$DISPLAYSS}' id='inlineSavedSearch' >
	{$SAVED_SEARCH}
</div>
</td>
</tr>

{/if}
{if $displayType != 'popupView'}
<tr>
	<td colspan='5'>
        <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' accessKey='{$APP.LBL_SEARCH_BUTTON_KEY}' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}' id='search_form_submit'/>&nbsp;
        <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' accessKey='{$APP.LBL_CLEAR_BUTTON_KEY}' onclick='SUGAR.searchForm.clear_form(this.form); document.getElementById("saved_search_select").options[0].selected=true; return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $DOCUMENTS_MODULE}
        &nbsp;<input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" accessKey="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_KEY}" type="button" class="button" value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}" onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");' />
        {/if}
        <a id="basic_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|basic_search','{$module}|advanced_search')" href="#">{$APP.LNK_BASIC_SEARCH}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_SEARCH_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'  onclick='SUGAR.searchForm.clear_form(this.form);' class='button' type='button' name='go_select' value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>	
        </span>
	</td>
	<td class="help">
	    {if $DISPLAY_SEARCH_HELP}
	    <img  border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={sugar_getimagepath file='close.gif'}></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" class="help-search">
	    {/if}
    </td>
</tr>
{/if}
</table>

<script>
{literal}
	if(typeof(loadSSL_Scripts)=='function'){
		loadSSL_Scripts();
	}
{/literal}	
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['popup_query_form_modified_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_created_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_assigned_user_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_ant_clienteregionais_name_advanced']={"form":"popup_query_form","method":"query","modules":["ant_cliente"],"group":"or","field_list":["name","id"],"populate_list":["ant_clienteregionais_name_advanced","ant_client71d2cliente_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_ant_pedido_regionais_name_advanced']={"form":"popup_query_form","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_regionais_name_advanced","ant_pedido17ef_pedido_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_ant_pedido_gionais_1_name_advanced']={"form":"popup_query_form","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_gionais_1_name_advanced","ant_pedido4dba_pedido_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_ant_estoqueregionais_name_advanced']={"form":"popup_query_form","method":"query","modules":["ant_estoque_geral"],"group":"or","field_list":["name","id"],"populate_list":["ant_estoqueregionais_name_advanced","ant_estoqu7abae_geral_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['popup_query_form_ant_inutiliregionais_name_advanced']={"form":"popup_query_form","method":"query","modules":["ant_inutilizado"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutiliregionais_name_advanced","ant_inutil66e6ilizado_ida_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}