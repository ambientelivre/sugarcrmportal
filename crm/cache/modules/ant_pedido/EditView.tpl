

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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_pedido'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_pedido", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='ped_codigo_boleto_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_CODIGO_BOLETO' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_codigo_boleto.value) <= 0}
{assign var="value" value=$fields.ped_codigo_boleto.default_value }
{else}
{assign var="value" value=$fields.ped_codigo_boleto.value }
{/if}  
<input type='text' name='{$fields.ped_codigo_boleto.name}' 
id='{$fields.ped_codigo_boleto.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='100' > 
<td valign="top" id='ped_nm_razao_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_NM_RAZAO' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_nm_razao.value) <= 0}
{assign var="value" value=$fields.ped_nm_razao.default_value }
{else}
{assign var="value" value=$fields.ped_nm_razao.value }
{/if}  
<input type='text' name='{$fields.ped_nm_razao.name}' 
id='{$fields.ped_nm_razao.name}' size='30' 
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
<td valign="top" id='ped_status_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_STATUS ' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name="{$fields.ped_status.name}" 
id="{$fields.ped_status.name}" 
title='' tabindex="102"  
>
{if isset($fields.ped_status.value) && $fields.ped_status.value != ''}
{html_options options=$fields.ped_status.options selected=$fields.ped_status.value}
{else}
{html_options options=$fields.ped_status.options selected=$fields.ped_status.default}
{/if}
</select>
<td valign="top" id='ped_valor_total_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_VALOR_TOTAL' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_valor_total.value) <= 0}
{assign var="value" value=$fields.ped_valor_total.default_value }
{else}
{assign var="value" value=$fields.ped_valor_total.value }
{/if}  
<input type='text' name='{$fields.ped_valor_total.name}' 
id='{$fields.ped_valor_total.name}' size='30' 
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
<td valign="top" id='ant_pedido_cretarias_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_pedido_cretarias_name.name}" class="sqsEnabled" tabindex="104" id="{$fields.ant_pedido_cretarias_name.name}" size="" value="{$fields.ant_pedido_cretarias_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_pedido_cretarias_name.id_name}" 
id="{$fields.ant_pedido_cretarias_name.id_name}" 
value="{$fields.ant_pedido14e4etarias_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_pedido_cretarias_name.name}" id="btn_{$fields.ant_pedido_cretarias_name.name}" tabindex="104" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_pedido_cretarias_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_pedido14e4etarias_idb","name":"ant_pedido_cretarias_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_pedido_cretarias_name.name}" id="btn_clr_{$fields.ant_pedido_cretarias_name.name}" tabindex="104" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_SECRETARIAS_TITLE' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_pedido_etarias_1_name.name}" class="sqsEnabled" tabindex="105" id="{$fields.ant_pedido_etarias_1_name.name}" size="" value="{$fields.ant_pedido_etarias_1_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_pedido_etarias_1_name.id_name}" 
id="{$fields.ant_pedido_etarias_1_name.id_name}" 
value="{$fields.ant_pedidoc70eetarias_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_pedido_etarias_1_name.name}" id="btn_{$fields.ant_pedido_etarias_1_name.name}" tabindex="105" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_pedido_etarias_1_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_pedidoc70eetarias_idb","name":"ant_pedido_etarias_1_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_pedido_etarias_1_name.name}" id="btn_clr_{$fields.ant_pedido_etarias_1_name.name}" tabindex="105" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id="LBL_EDITVIEW_PANEL2">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL2' module='ant_pedido'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='ped_reg_origem_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_REG_ORIGEM ' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_reg_origem.value) <= 0}
{assign var="value" value=$fields.ped_reg_origem.default_value }
{else}
{assign var="value" value=$fields.ped_reg_origem.value }
{/if}  
<input type='text' name='{$fields.ped_reg_origem.name}' 
id='{$fields.ped_reg_origem.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='106' > 
<td valign="top" id='ped_sec_origem_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_SEC_ORIGEM' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_sec_origem.value) <= 0}
{assign var="value" value=$fields.ped_sec_origem.default_value }
{else}
{assign var="value" value=$fields.ped_sec_origem.value }
{/if}  
<input type='text' name='{$fields.ped_sec_origem.name}' 
id='{$fields.ped_sec_origem.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='107' > 
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
<div id="LBL_EDITVIEW_PANEL3">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL3' module='ant_pedido'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='ped_reg_destino_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_REG_DESTINO' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_reg_destino.value) <= 0}
{assign var="value" value=$fields.ped_reg_destino.default_value }
{else}
{assign var="value" value=$fields.ped_reg_destino.value }
{/if}  
<input type='text' name='{$fields.ped_reg_destino.name}' 
id='{$fields.ped_reg_destino.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='108' > 
<td valign="top" id='ped_clie_destino_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PED_CLIE_DESTINO' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.ped_clie_destino.value) <= 0}
{assign var="value" value=$fields.ped_clie_destino.default_value }
{else}
{assign var="value" value=$fields.ped_clie_destino.value }
{/if}  
<input type='text' name='{$fields.ped_clie_destino.name}' 
id='{$fields.ped_clie_destino.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='109' > 
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
<div id="LBL_EDITVIEW_PANEL1">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ant_pedido'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='created_by_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.created_by_name.name}" class="sqsEnabled" tabindex="110" id="{$fields.created_by_name.name}" size="" value="{$fields.created_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.created_by_name.id_name}" 
id="{$fields.created_by_name.id_name}" 
value="{$fields.created_by.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.created_by_name.name}" id="btn_{$fields.created_by_name.name}" tabindex="110" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
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
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.created_by_name.name}" id="btn_clr_{$fields.created_by_name.name}" tabindex="110" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='ant_pedido'}{/capture}
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
<td valign="top" id='date_modified_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='ant_pedido'}{/capture}
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
<td valign="top" id='modified_by_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_pedido'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.modified_by_name.name}" class="sqsEnabled" tabindex="113" id="{$fields.modified_by_name.name}" size="" value="{$fields.modified_by_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.modified_by_name.id_name}" 
id="{$fields.modified_by_name.id_name}" 
value="{$fields.modified_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.modified_by_name.name}" id="btn_{$fields.modified_by_name.name}" tabindex="113" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
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
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.modified_by_name.name}" id="btn_clr_{$fields.modified_by_name.name}" tabindex="113" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_pedido'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_pedido", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Data da Criação' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Data da Modificação' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_valor_total', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_VALOR_TOTAL' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_codigo_boleto', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_CODIGO_BOLETO' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_reg_origem', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_REG_ORIGEM ' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_sec_origem', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_SEC_ORIGEM' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_nm_razao', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_NM_RAZAO' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_lote', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_LOTE' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_reg_destino', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_REG_DESTINO' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_clie_destino', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_CLIE_DESTINO' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_status', 'enum', false,'{/literal}{sugar_translate label='LBL_PED_STATUS ' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ped_sec_destino', 'varchar', false,'{/literal}{sugar_translate label='LBL_PED_SEC_DESTINO' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ant_pedido_cretarias_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_pedido' for_js=true}{literal}' );
addToValidate('EditView', 'ant_pedido_etarias_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_SECRETARIAS_TITLE' module='ant_pedido' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_pedido' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ant_pedido' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'modified_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_pedido' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_pedido' for_js=true}{literal}', 'modified_user_id' );
addToValidateBinaryDependency('EditView', 'created_by_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_pedido' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CREATED' module='ant_pedido' for_js=true}{literal}', 'created_by' );
addToValidateBinaryDependency('EditView', 'ant_pedido_cretarias_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_pedido' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_pedido' for_js=true}{literal}', 'ant_pedido14e4etarias_idb' );
addToValidateBinaryDependency('EditView', 'ant_pedido_etarias_1_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_pedido' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_SECRETARIAS_TITLE' module='ant_pedido' for_js=true}{literal}', 'ant_pedidoc70eetarias_idb' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_ant_pedido_cretarias_name']={"form":"EditView","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_cretarias_name","ant_pedido14e4etarias_idb"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_ant_pedido_etarias_1_name']={"form":"EditView","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_etarias_1_name","ant_pedidoc70eetarias_idb"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_created_by_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['EditView_modified_by_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name","modified_user_id"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}
