

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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_producao'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_producao", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
<td valign="top" id='ant_producat_produto_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ant_producat_produto_name.name}" class="sqsEnabled" tabindex="100" id="{$fields.ant_producat_produto_name.name}" size="" value="{$fields.ant_producat_produto_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.ant_producat_produto_name.id_name}" 
id="{$fields.ant_producat_produto_name.id_name}" 
value="{$fields.ant_produc7cb0produto_idb.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_producat_produto_name.name}" id="btn_{$fields.ant_producat_produto_name.name}" tabindex="100" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.ant_producat_produto_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_produc7cb0produto_idb","name":"ant_producat_produto_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_producat_produto_name.name}" id="btn_clr_{$fields.ant_producat_produto_name.name}" tabindex="100" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.ant_producat_produto_name.name}.value = ''; this.form.{$fields.ant_producat_produto_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.ant_producat_produto_name.name}"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='prod_lote_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_LOTE' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.prod_lote.value) <= 0}
{assign var="value" value=$fields.prod_lote.default_value }
{else}
{assign var="value" value=$fields.prod_lote.value }
{/if}  
<input type='text' name='{$fields.prod_lote.name}' 
id='{$fields.prod_lote.name}' size='30' 
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
<td valign="top" id='prod_qtd_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_QTD' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.prod_qtd.value) <= 0}
{assign var="value" value=$fields.prod_qtd.default_value }
{else}
{assign var="value" value=$fields.prod_qtd.value }
{/if}  
<input type='text' name='{$fields.prod_qtd.name}' 
id='{$fields.prod_qtd.name}' size='30' maxlength='' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='102' > 
<td valign="top" id='prod_data_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_DATA' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.prod_data.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.prod_data.name}" id="{$fields.prod_data.name}" value="{$date_value}" title=''  tabindex='103' size="11" maxlength="10" >
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.prod_data.name}_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.prod_data.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.prod_data.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='prod_validade_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_VALIDADE ' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.prod_validade.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.prod_validade.name}" id="{$fields.prod_validade.name}" value="{$date_value}" title=''  tabindex='104' size="11" maxlength="10" >
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.prod_validade.name}_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.prod_validade.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.prod_validade.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
<td valign="top" id='prod_obs_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_OBS' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.prod_obs.value) <= 0}
{assign var="value" value=$fields.prod_obs.default_value }
{else}
{assign var="value" value=$fields.prod_obs.value }
{/if}  
<input type='text' name='{$fields.prod_obs.name}' 
id='{$fields.prod_obs.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='105' > 
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
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ant_producao'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_producao", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Data da Criação' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Data da Modificação' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'prod_lote', 'varchar', false,'{/literal}{sugar_translate label='LBL_PROD_LOTE' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'prod_obs', 'varchar', false,'{/literal}{sugar_translate label='LBL_PROD_OBS' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'prod_data', 'date', false,'{/literal}{sugar_translate label='LBL_PROD_DATA' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'prod_validade', 'date', false,'{/literal}{sugar_translate label='LBL_PROD_VALIDADE ' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'prod_qtd', 'int', false,'{/literal}{sugar_translate label='LBL_PROD_QTD' module='ant_producao' for_js=true}{literal}' );
addToValidate('EditView', 'ant_producat_produto_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE' module='ant_producao' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_producao' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ant_producao' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'ant_producat_produto_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ant_producao' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE' module='ant_producao' for_js=true}{literal}', 'ant_produc7cb0produto_idb' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_ant_producat_produto_name']={"form":"EditView","method":"query","modules":["ant_produto"],"group":"or","field_list":["name","id"],"populate_list":["ant_producat_produto_name","ant_produc7cb0produto_idb"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}
