

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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_secretarias'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_secretarias", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="EditView_tabs"
>
<div >
<div id="LBL_EDITVIEW_PANEL1">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ant_secretarias'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_razao_social_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_RAZAO_SOCIAL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_razao_social.value) <= 0}
{assign var="value" value=$fields.sec_razao_social.default_value }
{else}
{assign var="value" value=$fields.sec_razao_social.value }
{/if}  
<input type='text' name='{$fields.sec_razao_social.name}' 
id='{$fields.sec_razao_social.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='100' > 
<td valign="top" id='sec_nome_fantasia_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_NOME_FANTASIA' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_nome_fantasia.value) <= 0}
{assign var="value" value=$fields.sec_nome_fantasia.default_value }
{else}
{assign var="value" value=$fields.sec_nome_fantasia.value }
{/if}  
<input type='text' name='{$fields.sec_nome_fantasia.name}' 
id='{$fields.sec_nome_fantasia.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='101' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_cep_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CEP' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_cep.value) <= 0}
{assign var="value" value=$fields.sec_cep.default_value }
{else}
{assign var="value" value=$fields.sec_cep.value }
{/if}  
<input type='text' name='{$fields.sec_cep.name}' 
id='{$fields.sec_cep.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='102' > 
<td valign="top" id='sec_bairro_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_BAIRRO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_bairro.value) <= 0}
{assign var="value" value=$fields.sec_bairro.default_value }
{else}
{assign var="value" value=$fields.sec_bairro.value }
{/if}  
<input type='text' name='{$fields.sec_bairro.name}' 
id='{$fields.sec_bairro.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='103' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_cidade_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CIDADE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_cidade.value) <= 0}
{assign var="value" value=$fields.sec_cidade.default_value }
{else}
{assign var="value" value=$fields.sec_cidade.value }
{/if}  
<input type='text' name='{$fields.sec_cidade.name}' 
id='{$fields.sec_cidade.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='104' > 
<td valign="top" id='sec_estado_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_ESTADO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.sec_estado.name}" 
id="{$fields.sec_estado.name}" 
title='' tabindex="105"  
>
{if isset($fields.sec_estado.value) && $fields.sec_estado.value != ''}
{html_options options=$fields.sec_estado.options selected=$fields.sec_estado.value}
{else}
{html_options options=$fields.sec_estado.options selected=$fields.sec_estado.default}
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
<td valign="top" id='sec_tp_logradouro_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_TP_LOGRADOURO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.sec_tp_logradouro.name}" 
id="{$fields.sec_tp_logradouro.name}" 
title='' tabindex="106"  
>
{if isset($fields.sec_tp_logradouro.value) && $fields.sec_tp_logradouro.value != ''}
{html_options options=$fields.sec_tp_logradouro.options selected=$fields.sec_tp_logradouro.value}
{else}
{html_options options=$fields.sec_tp_logradouro.options selected=$fields.sec_tp_logradouro.default}
{/if}
</select>
<td valign="top" id='sec_logradouro_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_LOGRADOURO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_logradouro.value) <= 0}
{assign var="value" value=$fields.sec_logradouro.default_value }
{else}
{assign var="value" value=$fields.sec_logradouro.value }
{/if}  
<input type='text' name='{$fields.sec_logradouro.name}' 
id='{$fields.sec_logradouro.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='107' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_numero_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_NUMERO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_numero.value) <= 0}
{assign var="value" value=$fields.sec_numero.default_value }
{else}
{assign var="value" value=$fields.sec_numero.value }
{/if}  
<input type='text' name='{$fields.sec_numero.name}' 
id='{$fields.sec_numero.name}' size='30' maxlength='' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='108' > 
<td valign="top" id='sec_complemento_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_COMPLEMENTO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_complemento.value) <= 0}
{assign var="value" value=$fields.sec_complemento.default_value }
{else}
{assign var="value" value=$fields.sec_complemento.value }
{/if}  
<input type='text' name='{$fields.sec_complemento.name}' 
id='{$fields.sec_complemento.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='109' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_cnpj_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CNPJ' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_cnpj.value) <= 0}
{assign var="value" value=$fields.sec_cnpj.default_value }
{else}
{assign var="value" value=$fields.sec_cnpj.value }
{/if}  
<input type='text' name='{$fields.sec_cnpj.name}' 
id='{$fields.sec_cnpj.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='110' > 
<td valign="top" id='sec_ie_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_IE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_ie.value) <= 0}
{assign var="value" value=$fields.sec_ie.default_value }
{else}
{assign var="value" value=$fields.sec_ie.value }
{/if}  
<input type='text' name='{$fields.sec_ie.name}' 
id='{$fields.sec_ie.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='111' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_cnae_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CNAE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_cnae.value) <= 0}
{assign var="value" value=$fields.sec_cnae.default_value }
{else}
{assign var="value" value=$fields.sec_cnae.value }
{/if}  
<input type='text' name='{$fields.sec_cnae.name}' 
id='{$fields.sec_cnae.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='112' > 
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='ant_secretaregionais_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_secretaregionais_name.name}" class="sqsEnabled" tabindex="114" id="{$fields.ant_secretaregionais_name.name}" size="" value="{$fields.ant_secretaregionais_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_secretaregionais_name.id_name}" 
id="{$fields.ant_secretaregionais_name.id_name}" 
value="{$fields.ant_secretdacfgionais_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_secretaregionais_name.name}" id="btn_{$fields.ant_secretaregionais_name.name}" tabindex="114" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_secretaregionais_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_secretdacfgionais_ida","name":"ant_secretaregionais_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_secretaregionais_name.name}" id="btn_clr_{$fields.ant_secretaregionais_name.name}" tabindex="114" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.ant_secretaregionais_name.name}.value = ''; this.form.{$fields.ant_secretaregionais_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.ant_secretaregionais_name.name}"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='ant_clientecretarias_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_clientecretarias_name.name}" class="sqsEnabled" tabindex="115" id="{$fields.ant_clientecretarias_name.name}" size="" value="{$fields.ant_clientecretarias_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_clientecretarias_name.id_name}" 
id="{$fields.ant_clientecretarias_name.id_name}" 
value="{$fields.ant_client895acliente_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_clientecretarias_name.name}" id="btn_{$fields.ant_clientecretarias_name.name}" tabindex="115" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_clientecretarias_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_client895acliente_ida","name":"ant_clientecretarias_name"}}{/literal}, 
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
<td valign="top" id='ant_pedido_cretarias_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_pedido_cretarias_name.name}" class="sqsEnabled" tabindex="116" id="{$fields.ant_pedido_cretarias_name.name}" size="" value="{$fields.ant_pedido_cretarias_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_pedido_cretarias_name.id_name}" 
id="{$fields.ant_pedido_cretarias_name.id_name}" 
value="{$fields.ant_pedido7367_pedido_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_pedido_cretarias_name.name}" id="btn_{$fields.ant_pedido_cretarias_name.name}" tabindex="116" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_pedido_cretarias_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_pedido7367_pedido_ida","name":"ant_pedido_cretarias_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_pedido_cretarias_name.name}" id="btn_clr_{$fields.ant_pedido_cretarias_name.name}" tabindex="116" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.ant_pedido_cretarias_name.name}.value = ''; this.form.{$fields.ant_pedido_cretarias_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.ant_pedido_cretarias_name.name}"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='ant_pedido_etarias_1_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_pedido_etarias_1_name.name}" class="sqsEnabled" tabindex="117" id="{$fields.ant_pedido_etarias_1_name.name}" size="" value="{$fields.ant_pedido_etarias_1_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_pedido_etarias_1_name.id_name}" 
id="{$fields.ant_pedido_etarias_1_name.id_name}" 
value="{$fields.ant_pedidof689_pedido_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_pedido_etarias_1_name.name}" id="btn_{$fields.ant_pedido_etarias_1_name.name}" tabindex="117" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_pedido_etarias_1_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_pedidof689_pedido_ida","name":"ant_pedido_etarias_1_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_pedido_etarias_1_name.name}" id="btn_clr_{$fields.ant_pedido_etarias_1_name.name}" tabindex="117" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.ant_pedido_etarias_1_name.name}.value = ''; this.form.{$fields.ant_pedido_etarias_1_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.ant_pedido_etarias_1_name.name}"] = false;
	

enableQS(false);
-->	
</script>
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
<div id="LBL_EDITVIEW_PANEL4">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL4' module='ant_secretarias'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_contato_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CONTATO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.sec_contato.value) <= 0}
{assign var="value" value=$fields.sec_contato.default_value }
{else}
{assign var="value" value=$fields.sec_contato.value }
{/if}  
<input type='text' name='{$fields.sec_contato.name}' 
id='{$fields.sec_contato.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='118' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_telefone_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_TELEFONE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_telefone.value) <= 0}
{assign var="value" value=$fields.sec_telefone.default_value }
{else}
{assign var="value" value=$fields.sec_telefone.value }
{/if}  
<input type='text' name='{$fields.sec_telefone.name}' 
id='{$fields.sec_telefone.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='119' > 
<td valign="top" id='sec_email_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_EMAIL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_email.value) <= 0}
{assign var="value" value=$fields.sec_email.default_value }
{else}
{assign var="value" value=$fields.sec_email.value }
{/if}  
<input type='text' name='{$fields.sec_email.name}' 
id='{$fields.sec_email.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='120' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
{/if}
<div id="LBL_EDITVIEW_PANEL3">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL3' module='ant_secretarias'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_cord_est_nome_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CORD_EST_NOME' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if strlen($fields.sec_cord_est_nome.value) <= 0}
{assign var="value" value=$fields.sec_cord_est_nome.default_value }
{else}
{assign var="value" value=$fields.sec_cord_est_nome.value }
{/if}  
<input type='text' name='{$fields.sec_cord_est_nome.name}' 
id='{$fields.sec_cord_est_nome.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='121' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='sec_cord_est_email_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CORD_EST_EMAIL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_cord_est_email.value) <= 0}
{assign var="value" value=$fields.sec_cord_est_email.default_value }
{else}
{assign var="value" value=$fields.sec_cord_est_email.value }
{/if}  
<input type='text' name='{$fields.sec_cord_est_email.name}' 
id='{$fields.sec_cord_est_email.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='122' > 
<td valign="top" id='sec_cord_est_tel_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CORD_EST_TEL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.sec_cord_est_tel.value) <= 0}
{assign var="value" value=$fields.sec_cord_est_tel.default_value }
{else}
{assign var="value" value=$fields.sec_cord_est_tel.value }
{/if}  
<input type='text' name='{$fields.sec_cord_est_tel.name}' 
id='{$fields.sec_cord_est_tel.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='123' > 
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
{/if}
<div id="LBL_EDITVIEW_PANEL2">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL2' module='ant_secretarias'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='created_by_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.created_by_name.name}" class="sqsEnabled" tabindex="124" id="{$fields.created_by_name.name}" size="" value="{$fields.created_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.created_by_name.id_name}" 
id="{$fields.created_by_name.id_name}" 
value="{$fields.created_by.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.created_by_name.name}" id="btn_{$fields.created_by_name.name}" tabindex="124" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
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
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.created_by_name.name}" id="btn_clr_{$fields.created_by_name.name}" tabindex="124" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='ant_secretarias'}{/capture}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.modified_by_name.name}" class="sqsEnabled" tabindex="126" id="{$fields.modified_by_name.name}" size="" value="{$fields.modified_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.modified_by_name.id_name}" 
id="{$fields.modified_by_name.id_name}" 
value="{$fields.modified_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.modified_by_name.name}" id="btn_{$fields.modified_by_name.name}" tabindex="126" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
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
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.modified_by_name.name}" id="btn_clr_{$fields.modified_by_name.name}" tabindex="126" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='ant_secretarias'}{/capture}
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
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_secretarias'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_secretarias", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Data da Criação' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Data da Modificação' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_nome_fantasia', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_NOME_FANTASIA' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cidade', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CIDADE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cep', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CEP' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_bairro', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_BAIRRO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_EMAIL' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_telefone', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_TELEFONE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_estado', 'enum', false,'{/literal}{sugar_translate label='LBL_SEC_ESTADO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_tp_logradouro', 'enum', false,'{/literal}{sugar_translate label='LBL_SEC_TP_LOGRADOURO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_logradouro', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_LOGRADOURO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_numero', 'int', false,'{/literal}{sugar_translate label='LBL_SEC_NUMERO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_complemento', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_COMPLEMENTO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cnpj', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CNPJ' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_ie', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_IE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cnae', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CNAE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_razao_social', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_RAZAO_SOCIAL' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cord_est_nome', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CORD_EST_NOME' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cord_est_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CORD_EST_EMAIL' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_cord_est_tel', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CORD_EST_TEL' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'sec_contato', 'varchar', false,'{/literal}{sugar_translate label='LBL_SEC_CONTATO' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'ant_clientecretarias_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'ant_pedido_etarias_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'ant_pedido_cretarias_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'ant_secretaregionais_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'ant_estoquecretarias_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE' module='ant_secretarias' for_js=true}{literal}' );
addToValidate('EditView', 'ant_inutilicretarias_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE' module='ant_secretarias' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ant_secretarias' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'modified_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_secretarias' for_js=true}{literal}', 'modified_user_id' );
addToValidateBinaryDependency('EditView', 'created_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CREATED' module='ant_secretarias' for_js=true}{literal}', 'created_by' );
addToValidateBinaryDependency('EditView', 'ant_clientecretarias_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE' module='ant_secretarias' for_js=true}{literal}', 'ant_client895acliente_ida' );
addToValidateBinaryDependency('EditView', 'ant_pedido_etarias_1_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias' for_js=true}{literal}', 'ant_pedidof689_pedido_ida' );
addToValidateBinaryDependency('EditView', 'ant_pedido_cretarias_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias' for_js=true}{literal}', 'ant_pedido7367_pedido_ida' );
addToValidateBinaryDependency('EditView', 'ant_secretaregionais_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_secretarias' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_secretarias' for_js=true}{literal}', 'ant_secretdacfgionais_ida' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_ant_secretaregionais_name']={"form":"EditView","method":"query","modules":["ant_regionais"],"group":"or","field_list":["name","id"],"populate_list":["ant_secretaregionais_name","ant_secretdacfgionais_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_ant_clientecretarias_name']={"form":"EditView","method":"query","modules":["ant_cliente"],"group":"or","field_list":["name","id"],"populate_list":["ant_clientecretarias_name","ant_client895acliente_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_ant_pedido_cretarias_name']={"form":"EditView","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_cretarias_name","ant_pedido7367_pedido_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_ant_pedido_etarias_1_name']={"form":"EditView","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_etarias_1_name","ant_pedidof689_pedido_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_created_by_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_modified_by_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name","modified_user_id"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}
