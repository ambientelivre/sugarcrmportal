

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value='ant_producao'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ant_producao'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ant_producao'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ant_producao", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ant_producao_detailview_tabs"
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
{if !$fields.ant_producat_produto_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.ant_producat_produto_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ant_produc7cb0produto_idb.value)}<a href="index.php?module=ant_produto&action=DetailView&record={$fields.ant_produc7cb0produto_idb.value}">{/if}
<span id="ant_produc7cb0produto_idb" class="sugar_field">{$fields.ant_producat_produto_name.value}</span>
{if !empty($fields.ant_produc7cb0produto_idb.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.prod_lote.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_LOTE' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prod_lote.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.prod_lote.value) <= 0}
{assign var="value" value=$fields.prod_lote.default_value }
{else}
{assign var="value" value=$fields.prod_lote.value }
{/if} 
<span class="sugar_field" id="{$fields.prod_lote.name}">{$fields.prod_lote.value}</span>
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
{if !$fields.prod_qtd.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_QTD' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prod_qtd.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.prod_qtd.name}">
{sugar_number_format precision=0 var=$fields.prod_qtd.value}
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.prod_data.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_DATA' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prod_data.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.prod_data.value) <= 0}
{assign var="value" value=$fields.prod_data.default_value }
{else}
{assign var="value" value=$fields.prod_data.value }
{/if} 
<span class="sugar_field" id="{$fields.prod_data.name}">{$fields.prod_data.value}</span>
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
{if !$fields.prod_validade.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_VALIDADE ' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prod_validade.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.prod_validade.value) <= 0}
{assign var="value" value=$fields.prod_validade.default_value }
{else}
{assign var="value" value=$fields.prod_validade.value }
{/if} 
<span class="sugar_field" id="{$fields.prod_validade.name}">{$fields.prod_validade.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.prod_obs.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROD_OBS' module='ant_producao'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.prod_obs.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.prod_obs.value) <= 0}
{assign var="value" value=$fields.prod_obs.default_value }
{else}
{assign var="value" value=$fields.prod_obs.value }
{/if} 
<span class="sugar_field" id="{$fields.prod_obs.name}">{$fields.prod_obs.value}</span>
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
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

</form>