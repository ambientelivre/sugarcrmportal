

<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value='ant_cliente'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ant_cliente'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ant_cliente'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_cliente", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ant_cliente_detailview_tabs"
>
<div >
<div id='DEFAULT' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='detailpanel_1' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.ant_clienteregionais_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.ant_clienteregionais_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_clientcab3gionais_idb.value)}<a href="index.php?module=ant_regionais&action=DetailView&record={$fields.ant_clientcab3gionais_idb.value}">{/if}
<span id="ant_clientcab3gionais_idb" class="sugar_field">{$fields.ant_clienteregionais_name.value}</span>
{if !empty($fields.ant_clientcab3gionais_idb.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_razao_social.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_RAZAO_SOCIAL' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_razao_social.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_razao_social.value) <= 0}
{assign var="value" value=$fields.cli_razao_social.default_value }
{else}
{assign var="value" value=$fields.cli_razao_social.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_razao_social.name}">{$fields.cli_razao_social.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_nm_fantasia.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_NM_FANTASIA' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_nm_fantasia.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_nm_fantasia.value) <= 0}
{assign var="value" value=$fields.cli_nm_fantasia.default_value }
{else}
{assign var="value" value=$fields.cli_nm_fantasia.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_nm_fantasia.name}">{$fields.cli_nm_fantasia.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_cep.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CEP' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_cep.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_cep.value) <= 0}
{assign var="value" value=$fields.cli_cep.default_value }
{else}
{assign var="value" value=$fields.cli_cep.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_cep.name}">{$fields.cli_cep.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_bairro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_BAIRRO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_bairro.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_bairro.value) <= 0}
{assign var="value" value=$fields.cli_bairro.default_value }
{else}
{assign var="value" value=$fields.cli_bairro.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_bairro.name}">{$fields.cli_bairro.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_cidade.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CIDADE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_cidade.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_cidade.value) <= 0}
{assign var="value" value=$fields.cli_cidade.default_value }
{else}
{assign var="value" value=$fields.cli_cidade.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_cidade.name}">{$fields.cli_cidade.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_estado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_ESTADO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_estado.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.cli_estado.options)}
<input type="hidden" class="sugar_field" id="{$fields.cli_estado.name}" value="{ $fields.cli_estado.options }">
{ $fields.cli_estado.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.cli_estado.name}" value="{ $fields.cli_estado.value }">
{ $fields.cli_estado.options[$fields.cli_estado.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_tp_logradouro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_TP_LOGRADOURO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_tp_logradouro.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.cli_tp_logradouro.options)}
<input type="hidden" class="sugar_field" id="{$fields.cli_tp_logradouro.name}" value="{ $fields.cli_tp_logradouro.options }">
{ $fields.cli_tp_logradouro.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.cli_tp_logradouro.name}" value="{ $fields.cli_tp_logradouro.value }">
{ $fields.cli_tp_logradouro.options[$fields.cli_tp_logradouro.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_logradouro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_LOGRADOURO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_logradouro.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_logradouro.value) <= 0}
{assign var="value" value=$fields.cli_logradouro.default_value }
{else}
{assign var="value" value=$fields.cli_logradouro.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_logradouro.name}">{$fields.cli_logradouro.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_numero.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_NUMERO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_numero.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_numero.value) <= 0}
{assign var="value" value=$fields.cli_numero.default_value }
{else}
{assign var="value" value=$fields.cli_numero.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_numero.name}">{$fields.cli_numero.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_complemento.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_COMPLEMENTO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_complemento.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_complemento.value) <= 0}
{assign var="value" value=$fields.cli_complemento.default_value }
{else}
{assign var="value" value=$fields.cli_complemento.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_complemento.name}">{$fields.cli_complemento.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_cnpj_cpf.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CNPJ_CPF' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_cnpj_cpf.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_cnpj_cpf.value) <= 0}
{assign var="value" value=$fields.cli_cnpj_cpf.default_value }
{else}
{assign var="value" value=$fields.cli_cnpj_cpf.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_cnpj_cpf.name}">{$fields.cli_cnpj_cpf.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_contato.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CONTATO' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_contato.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_contato.value) <= 0}
{assign var="value" value=$fields.cli_contato.default_value }
{else}
{assign var="value" value=$fields.cli_contato.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_contato.name}">{$fields.cli_contato.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_telefone.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_TELEFONE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_telefone.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_telefone.value) <= 0}
{assign var="value" value=$fields.cli_telefone.default_value }
{else}
{assign var="value" value=$fields.cli_telefone.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_telefone.name}">{$fields.cli_telefone.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_email.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_EMAIL' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_email.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_email.value) <= 0}
{assign var="value" value=$fields.cli_email.default_value }
{else}
{assign var="value" value=$fields.cli_email.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_email.name}">{$fields.cli_email.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.ant_clientecretarias_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.ant_clientecretarias_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_client3388etarias_idb.value)}<a href="index.php?module=ant_secretarias&action=DetailView&record={$fields.ant_client3388etarias_idb.value}">{/if}
<span id="ant_client3388etarias_idb" class="sugar_field">{$fields.ant_clientecretarias_name.value}</span>
{if !empty($fields.ant_client3388etarias_idb.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_ie.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_IE' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_ie.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_ie.value) <= 0}
{assign var="value" value=$fields.cli_ie.default_value }
{else}
{assign var="value" value=$fields.cli_ie.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_ie.name}">{$fields.cli_ie.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_crmv.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_CRMV' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_crmv.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_crmv.value) <= 0}
{assign var="value" value=$fields.cli_crmv.default_value }
{else}
{assign var="value" value=$fields.cli_crmv.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_crmv.name}">{$fields.cli_crmv.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cli_pncebt.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CLI_PNCEBT' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cli_pncebt.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.cli_pncebt.value) <= 0}
{assign var="value" value=$fields.cli_pncebt.default_value }
{else}
{assign var="value" value=$fields.cli_pncebt.value }
{/if} 
<span class="sugar_field" id="{$fields.cli_pncebt.name}">{$fields.cli_pncebt.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='LBL_EDITVIEW_PANEL1' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ant_cliente'}</h4>
<table id='detailpanel_2' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.created_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.created_by_name.hidden}
{counter name="panelFieldCount"}

<span id="created_by" class="sugar_field">{$fields.created_by_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_entered.value) <= 0}
{assign var="value" value=$fields.date_entered.default_value }
{else}
{assign var="value" value=$fields.date_entered.value }
{/if} 
<span class="sugar_field" id="{$fields.date_entered.name}">{$fields.date_entered.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.modified_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.modified_by_name.hidden}
{counter name="panelFieldCount"}

<span id="modified_user_id" class="sugar_field">{$fields.modified_by_name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='ant_cliente'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_modified.value) <= 0}
{assign var="value" value=$fields.date_modified.default_value }
{else}
{assign var="value" value=$fields.date_modified.value }
{/if} 
<span class="sugar_field" id="{$fields.date_modified.name}">{$fields.date_modified.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
</div></div>

</form>