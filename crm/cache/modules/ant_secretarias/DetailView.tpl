

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value='ant_secretarias'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ant_secretarias'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ant_secretarias'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_secretarias", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ant_secretarias_detailview_tabs"
>
<div >
<div id='LBL_EDITVIEW_PANEL1' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL1' module='ant_secretarias'}</h4>
<table id='detailpanel_1' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_razao_social.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_RAZAO_SOCIAL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_razao_social.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_razao_social.value) <= 0}
{assign var="value" value=$fields.sec_razao_social.default_value }
{else}
{assign var="value" value=$fields.sec_razao_social.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_razao_social.name}">{$fields.sec_razao_social.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_nome_fantasia.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_NOME_FANTASIA' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_nome_fantasia.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_nome_fantasia.value) <= 0}
{assign var="value" value=$fields.sec_nome_fantasia.default_value }
{else}
{assign var="value" value=$fields.sec_nome_fantasia.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_nome_fantasia.name}">{$fields.sec_nome_fantasia.value}</span>
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
{if !$fields.sec_cep.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CEP' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_cep.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cep.value) <= 0}
{assign var="value" value=$fields.sec_cep.default_value }
{else}
{assign var="value" value=$fields.sec_cep.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cep.name}">{$fields.sec_cep.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_bairro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_BAIRRO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_bairro.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_bairro.value) <= 0}
{assign var="value" value=$fields.sec_bairro.default_value }
{else}
{assign var="value" value=$fields.sec_bairro.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_bairro.name}">{$fields.sec_bairro.value}</span>
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
{if !$fields.sec_cidade.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CIDADE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_cidade.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cidade.value) <= 0}
{assign var="value" value=$fields.sec_cidade.default_value }
{else}
{assign var="value" value=$fields.sec_cidade.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cidade.name}">{$fields.sec_cidade.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_estado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_ESTADO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_estado.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.sec_estado.options)}
<input type="hidden" class="sugar_field" id="{$fields.sec_estado.name}" value="{ $fields.sec_estado.options }">
{ $fields.sec_estado.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.sec_estado.name}" value="{ $fields.sec_estado.value }">
{ $fields.sec_estado.options[$fields.sec_estado.value]}
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
{if !$fields.sec_tp_logradouro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_TP_LOGRADOURO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_tp_logradouro.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.sec_tp_logradouro.options)}
<input type="hidden" class="sugar_field" id="{$fields.sec_tp_logradouro.name}" value="{ $fields.sec_tp_logradouro.options }">
{ $fields.sec_tp_logradouro.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.sec_tp_logradouro.name}" value="{ $fields.sec_tp_logradouro.value }">
{ $fields.sec_tp_logradouro.options[$fields.sec_tp_logradouro.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_logradouro.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_LOGRADOURO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_logradouro.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_logradouro.value) <= 0}
{assign var="value" value=$fields.sec_logradouro.default_value }
{else}
{assign var="value" value=$fields.sec_logradouro.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_logradouro.name}">{$fields.sec_logradouro.value}</span>
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
{if !$fields.sec_numero.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_NUMERO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_numero.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.sec_numero.name}">
{sugar_number_format precision=0 var=$fields.sec_numero.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_complemento.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_COMPLEMENTO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_complemento.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_complemento.value) <= 0}
{assign var="value" value=$fields.sec_complemento.default_value }
{else}
{assign var="value" value=$fields.sec_complemento.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_complemento.name}">{$fields.sec_complemento.value}</span>
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
{if !$fields.sec_cnpj.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CNPJ' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_cnpj.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cnpj.value) <= 0}
{assign var="value" value=$fields.sec_cnpj.default_value }
{else}
{assign var="value" value=$fields.sec_cnpj.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cnpj.name}">{$fields.sec_cnpj.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_ie.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_IE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_ie.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_ie.value) <= 0}
{assign var="value" value=$fields.sec_ie.default_value }
{else}
{assign var="value" value=$fields.sec_ie.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_ie.name}">{$fields.sec_ie.value}</span>
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
{if !$fields.sec_cnae.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CNAE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_cnae.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cnae.value) <= 0}
{assign var="value" value=$fields.sec_cnae.default_value }
{else}
{assign var="value" value=$fields.sec_cnae.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cnae.name}">{$fields.sec_cnae.value}</span>
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.ant_secretaregionais_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ant_secretaregionais_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_secretdacfgionais_ida.value)}<a href="index.php?module=ant_regionais&action=DetailView&record={$fields.ant_secretdacfgionais_ida.value}">{/if}
<span id="ant_secretdacfgionais_ida" class="sugar_field">{$fields.ant_secretaregionais_name.value}</span>
{if !empty($fields.ant_secretdacfgionais_ida.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.ant_clientecretarias_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ant_clientecretarias_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_client895acliente_ida.value)}<a href="index.php?module=ant_cliente&action=DetailView&record={$fields.ant_client895acliente_ida.value}">{/if}
<span id="ant_client895acliente_ida" class="sugar_field">{$fields.ant_clientecretarias_name.value}</span>
{if !empty($fields.ant_client895acliente_ida.value)}</a>{/if}
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
{if !$fields.ant_pedido_cretarias_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ant_pedido_cretarias_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_pedido7367_pedido_ida.value)}<a href="index.php?module=ant_pedido&action=DetailView&record={$fields.ant_pedido7367_pedido_ida.value}">{/if}
<span id="ant_pedido7367_pedido_ida" class="sugar_field">{$fields.ant_pedido_cretarias_name.value}</span>
{if !empty($fields.ant_pedido7367_pedido_ida.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.ant_pedido_etarias_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ant_pedido_etarias_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_pedidof689_pedido_ida.value)}<a href="index.php?module=ant_pedido&action=DetailView&record={$fields.ant_pedidof689_pedido_ida.value}">{/if}
<span id="ant_pedidof689_pedido_ida" class="sugar_field">{$fields.ant_pedido_etarias_1_name.value}</span>
{if !empty($fields.ant_pedidof689_pedido_ida.value)}</a>{/if}
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
<div id='LBL_EDITVIEW_PANEL4' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL4' module='ant_secretarias'}</h4>
<table id='detailpanel_2' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_contato.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CONTATO' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.sec_contato.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_contato.value) <= 0}
{assign var="value" value=$fields.sec_contato.default_value }
{else}
{assign var="value" value=$fields.sec_contato.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_contato.name}">{$fields.sec_contato.value}</span>
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
{if !$fields.sec_telefone.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_TELEFONE' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_telefone.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_telefone.value) <= 0}
{assign var="value" value=$fields.sec_telefone.default_value }
{else}
{assign var="value" value=$fields.sec_telefone.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_telefone.name}">{$fields.sec_telefone.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_email.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_EMAIL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_email.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_email.value) <= 0}
{assign var="value" value=$fields.sec_email.default_value }
{else}
{assign var="value" value=$fields.sec_email.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_email.name}">{$fields.sec_email.value}</span>
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
<script>document.getElementById("LBL_EDITVIEW_PANEL4").style.display='none';</script>
{/if}
<div id='LBL_EDITVIEW_PANEL3' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL3' module='ant_secretarias'}</h4>
<table id='detailpanel_3' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_cord_est_nome.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CORD_EST_NOME' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.sec_cord_est_nome.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cord_est_nome.value) <= 0}
{assign var="value" value=$fields.sec_cord_est_nome.default_value }
{else}
{assign var="value" value=$fields.sec_cord_est_nome.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cord_est_nome.name}">{$fields.sec_cord_est_nome.value}</span>
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
{if !$fields.sec_cord_est_email.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CORD_EST_EMAIL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_cord_est_email.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cord_est_email.value) <= 0}
{assign var="value" value=$fields.sec_cord_est_email.default_value }
{else}
{assign var="value" value=$fields.sec_cord_est_email.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cord_est_email.name}">{$fields.sec_cord_est_email.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.sec_cord_est_tel.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEC_CORD_EST_TEL' module='ant_secretarias'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.sec_cord_est_tel.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.sec_cord_est_tel.value) <= 0}
{assign var="value" value=$fields.sec_cord_est_tel.default_value }
{else}
{assign var="value" value=$fields.sec_cord_est_tel.value }
{/if} 
<span class="sugar_field" id="{$fields.sec_cord_est_tel.name}">{$fields.sec_cord_est_tel.value}</span>
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
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
{/if}
<div id='LBL_EDITVIEW_PANEL2' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_EDITVIEW_PANEL2' module='ant_secretarias'}</h4>
<table id='detailpanel_4' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.created_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATED' module='ant_secretarias'}{/capture}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='ant_secretarias'}{/capture}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='ant_secretarias'}{/capture}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='ant_secretarias'}{/capture}
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
<script>document.getElementById("LBL_EDITVIEW_PANEL2").style.display='none';</script>
{/if}
</div></div>

</form>