

<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module) || !empty($smarty.request.relate_to)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_cliente'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_cliente", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="EditView_tabs"
>
<div >
<div id="Default_{$module}_Subpanel">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='ant_clienteregionais_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_clienteregionais_name.name}" class="sqsEnabled" tabindex="100" id="{$fields.ant_clienteregionais_name.name}" size="" value="{$fields.ant_clienteregionais_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_clienteregionais_name.id_name}" 
id="{$fields.ant_clienteregionais_name.id_name}" 
value="{$fields.ant_clientcab3gionais_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_clienteregionais_name.name}" id="btn_{$fields.ant_clienteregionais_name.name}" tabindex="100" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_clienteregionais_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_clientcab3gionais_idb","name":"ant_clienteregionais_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_clienteregionais_name.name}" id="btn_clr_{$fields.ant_clienteregionais_name.name}" tabindex="100" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.ant_clienteregionais_name.name}.value = ''; this.form.{$fields.ant_clienteregionais_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.ant_clienteregionais_name.name}"] = false;
	

enableQS(false);
-->	
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_razao_social_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_RAZAO_SOCIAL' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_razao_social.value) <= 0}
{assign var="value" value=$fields.cli_razao_social.default_value }
{else}
{assign var="value" value=$fields.cli_razao_social.value }
{/if}  
<input type='text' name='{$fields.cli_razao_social.name}' 
id='{$fields.cli_razao_social.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='101' > 
<td valign="top" id='cli_nm_fantasia_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_NM_FANTASIA' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_nm_fantasia.value) <= 0}
{assign var="value" value=$fields.cli_nm_fantasia.default_value }
{else}
{assign var="value" value=$fields.cli_nm_fantasia.value }
{/if}  
<input type='text' name='{$fields.cli_nm_fantasia.name}' 
id='{$fields.cli_nm_fantasia.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='102' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_cep_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CEP' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_cep.value) <= 0}
{assign var="value" value=$fields.cli_cep.default_value }
{else}
{assign var="value" value=$fields.cli_cep.value }
{/if}  
<input type='text' name='{$fields.cli_cep.name}' 
id='{$fields.cli_cep.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='103' > 
<td valign="top" id='cli_bairro_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_BAIRRO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_bairro.value) <= 0}
{assign var="value" value=$fields.cli_bairro.default_value }
{else}
{assign var="value" value=$fields.cli_bairro.value }
{/if}  
<input type='text' name='{$fields.cli_bairro.name}' 
id='{$fields.cli_bairro.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='104' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_cidade_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CIDADE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_cidade.value) <= 0}
{assign var="value" value=$fields.cli_cidade.default_value }
{else}
{assign var="value" value=$fields.cli_cidade.value }
{/if}  
<input type='text' name='{$fields.cli_cidade.name}' 
id='{$fields.cli_cidade.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='105' > 
<td valign="top" id='cli_estado_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_ESTADO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.cli_estado.name}" 
id="{$fields.cli_estado.name}" 
title='' tabindex="106"  
>
{if isset($fields.cli_estado.value) && $fields.cli_estado.value != ''}
{html_options options=$fields.cli_estado.options selected=$fields.cli_estado.value}
{else}
{html_options options=$fields.cli_estado.options selected=$fields.cli_estado.default}
{/if}
</select>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_tp_logradouro_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_TP_LOGRADOURO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.cli_tp_logradouro.name}" 
id="{$fields.cli_tp_logradouro.name}" 
title='' tabindex="107"  
>
{if isset($fields.cli_tp_logradouro.value) && $fields.cli_tp_logradouro.value != ''}
{html_options options=$fields.cli_tp_logradouro.options selected=$fields.cli_tp_logradouro.value}
{else}
{html_options options=$fields.cli_tp_logradouro.options selected=$fields.cli_tp_logradouro.default}
{/if}
</select>
<td valign="top" id='cli_logradouro_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_LOGRADOURO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_logradouro.value) <= 0}
{assign var="value" value=$fields.cli_logradouro.default_value }
{else}
{assign var="value" value=$fields.cli_logradouro.value }
{/if}  
<input type='text' name='{$fields.cli_logradouro.name}' 
id='{$fields.cli_logradouro.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='108' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_numero_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_NUMERO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_numero.value) <= 0}
{assign var="value" value=$fields.cli_numero.default_value }
{else}
{assign var="value" value=$fields.cli_numero.value }
{/if}  
<input type='text' name='{$fields.cli_numero.name}' 
id='{$fields.cli_numero.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='109' > 
<td valign="top" id='cli_complemento_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_COMPLEMENTO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_complemento.value) <= 0}
{assign var="value" value=$fields.cli_complemento.default_value }
{else}
{assign var="value" value=$fields.cli_complemento.value }
{/if}  
<input type='text' name='{$fields.cli_complemento.name}' 
id='{$fields.cli_complemento.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='110' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_cnpj_cpf_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CNPJ_CPF' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_cnpj_cpf.value) <= 0}
{assign var="value" value=$fields.cli_cnpj_cpf.default_value }
{else}
{assign var="value" value=$fields.cli_cnpj_cpf.value }
{/if}  
<input type='text' name='{$fields.cli_cnpj_cpf.name}' 
id='{$fields.cli_cnpj_cpf.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='111' > 
<td valign="top" id='cli_contato_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CONTATO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_contato.value) <= 0}
{assign var="value" value=$fields.cli_contato.default_value }
{else}
{assign var="value" value=$fields.cli_contato.value }
{/if}  
<input type='text' name='{$fields.cli_contato.name}' 
id='{$fields.cli_contato.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='112' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_telefone_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_TELEFONE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_telefone.value) <= 0}
{assign var="value" value=$fields.cli_telefone.default_value }
{else}
{assign var="value" value=$fields.cli_telefone.value }
{/if}  
<input type='text' name='{$fields.cli_telefone.name}' 
id='{$fields.cli_telefone.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='113' > 
<td valign="top" id='cli_email_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_EMAIL' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_email.value) <= 0}
{assign var="value" value=$fields.cli_email.default_value }
{else}
{assign var="value" value=$fields.cli_email.value }
{/if}  
<input type='text' name='{$fields.cli_email.name}' 
id='{$fields.cli_email.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='114' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='ant_clientecretarias_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_clientecretarias_name.name}" class="sqsEnabled" tabindex="115" id="{$fields.ant_clientecretarias_name.name}" size="" value="{$fields.ant_clientecretarias_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_clientecretarias_name.id_name}" 
id="{$fields.ant_clientecretarias_name.id_name}" 
value="{$fields.ant_client3388etarias_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_clientecretarias_name.name}" id="btn_{$fields.ant_clientecretarias_name.name}" tabindex="115" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_clientecretarias_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_client3388etarias_idb","name":"ant_clientecretarias_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_clientecretarias_name.name}" id="btn_clr_{$fields.ant_clientecretarias_name.name}" tabindex="115" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.ant_clientecretarias_name.name}.value = ''; this.form.{$fields.ant_clientecretarias_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.ant_clientecretarias_name.name}"] = false;
	

enableQS(false);
-->	
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_ie_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_IE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_ie.value) <= 0}
{assign var="value" value=$fields.cli_ie.default_value }
{else}
{assign var="value" value=$fields.cli_ie.value }
{/if}  
<input type='text' name='{$fields.cli_ie.name}' 
id='{$fields.cli_ie.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='116' > 
<td valign="top" id='cli_crmv_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CRMV' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_crmv.value) <= 0}
{assign var="value" value=$fields.cli_crmv.default_value }
{else}
{assign var="value" value=$fields.cli_crmv.value }
{/if}  
<input type='text' name='{$fields.cli_crmv.name}' 
id='{$fields.cli_crmv.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='117' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='cli_pncebt_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_PNCEBT' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.cli_pncebt.value) <= 0}
{assign var="value" value=$fields.cli_pncebt.default_value }
{else}
{assign var="value" value=$fields.cli_pncebt.value }
{/if}  
<input type='text' name='{$fields.cli_pncebt.name}' 
id='{$fields.cli_pncebt.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='118' > 
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id="LBL_EDITVIEW_PANEL1">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ant_cliente'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='created_by_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.created_by_name.name}" class="sqsEnabled" tabindex="120" id="{$fields.created_by_name.name}" size="" value="{$fields.created_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.created_by_name.id_name}" 
id="{$fields.created_by_name.id_name}" 
value="{$fields.created_by.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.created_by_name.name}" id="btn_{$fields.created_by_name.name}" tabindex="120" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.created_by_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"created_by","user_name":"created_by_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.created_by_name.name}" id="btn_clr_{$fields.created_by_name.name}" tabindex="120" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.created_by_name.name}.value = ''; this.form.{$fields.created_by_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.created_by_name.name}"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='date_entered_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.date_entered.value) <= 0}
{assign var="value" value=$fields.date_entered.default_value }
{else}
{assign var="value" value=$fields.date_entered.value }
{/if} 
<span class="sugar_field" id="{$fields.date_entered.name}">{$fields.date_entered.value}</span>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='modified_by_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.modified_by_name.name}" class="sqsEnabled" tabindex="122" id="{$fields.modified_by_name.name}" size="" value="{$fields.modified_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.modified_by_name.id_name}" 
id="{$fields.modified_by_name.id_name}" 
value="{$fields.modified_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.modified_by_name.name}" id="btn_{$fields.modified_by_name.name}" tabindex="122" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.modified_by_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"modified_user_id","user_name":"modified_by_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.modified_by_name.name}" id="btn_clr_{$fields.modified_by_name.name}" tabindex="122" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.modified_by_name.name}.value = ''; this.form.{$fields.modified_by_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.modified_by_name.name}"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='date_modified_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.date_modified.value) <= 0}
{assign var="value" value=$fields.date_modified.default_value }
{else}
{assign var="value" value=$fields.date_modified.value }
{/if} 
<span class="sugar_field" id="{$fields.date_modified.name}">{$fields.date_modified.value}</span>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_cliente'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_cliente", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
{$overlibStuff}
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
</script>{literal}
<script type="text/javascript">
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Data da Criação' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Data da Modificação' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_razao_social', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_RAZAO_SOCIAL' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_nm_fantasia', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_NM_FANTASIA' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_cep', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_CEP' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_cidade', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_CIDADE' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_EMAIL' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_cnpj_cpf', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_CNPJ_CPF' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_logradouro', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_LOGRADOURO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_numero', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_NUMERO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_bairro', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_BAIRRO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_contato', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_CONTATO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_telefone', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_TELEFONE' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_estado', 'enum', false,'{/literal}{sugar_translate label='LBL_CLI_ESTADO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_tp_logradouro', 'enum', false,'{/literal}{sugar_translate label='LBL_CLI_TP_LOGRADOURO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_complemento', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_COMPLEMENTO' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_ie', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_IE' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_crmv', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_CRMV' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'cli_pncebt', 'varchar', false,'{/literal}{sugar_translate label='LBL_CLI_PNCEBT' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'ant_clienteregionais_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_cliente' for_js=true}{literal}' );
addToValidate('EditView', 'ant_clientecretarias_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_cliente' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_cliente' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ant_cliente' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'modified_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_cliente' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_cliente' for_js=true}{literal}', 'modified_user_id' );
addToValidateBinaryDependency('EditView', 'created_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_cliente' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CREATED' module='ant_cliente' for_js=true}{literal}', 'created_by' );
addToValidateBinaryDependency('EditView', 'ant_clienteregionais_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_cliente' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_cliente' for_js=true}{literal}', 'ant_clientcab3gionais_idb' );
addToValidateBinaryDependency('EditView', 'ant_clientecretarias_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_cliente' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_cliente' for_js=true}{literal}', 'ant_client3388etarias_idb' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_ant_clienteregionais_name']={"form":"EditView","method":"query","modules":["ant_regionais"],"group":"or","field_list":["name","id"],"populate_list":["ant_clienteregionais_name","ant_clientcab3gionais_idb"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_ant_clientecretarias_name']={"form":"EditView","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_clientecretarias_name","ant_client3388etarias_idb"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_created_by_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_modified_by_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name","modified_user_id"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}
