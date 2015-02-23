

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
<input type="hidden" name="to_pdf" id="to_pdf" value=""><input type="hidden" name="dynamicoptions" id="dynamicoptions" value="{$dynamicoptions}"><input type="hidden" name="groupby" id="groupby" value=""><input type="hidden" name="dynamicols" id="dynamicols" value="">
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=KReports", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="KReports_detailview_tabs"
>
<div >
</div></div>

<input type="hidden" name="listfieldarray" id="listfieldarray" value="{$listfieldarray}">
<input type="hidden" name="listfields" id="listfields" value="{$fields.listfields.value}">
<input type="hidden" name="listtype" id="listtype" value="{$fields.listtype.value}">
<input type='hidden' name='listtypeproperties' id='listtypeproperties' value='{$fields.listtypeproperties.value}'>
<input type='hidden' name='reportoptions' id='reportoptions' value='{$reportoptions}'>
<input type='hidden' name='jsonlanguage' id='jsonlanguage' value='{$jsonlanguage}'>
<input type="hidden" name="recordid" id="recordid" value="{$fields.id.value}">
<link rel="stylesheet" type="text/css" href="custom/k/extjs4/resources/css/ext-all-gray.css" />
<link rel="stylesheet" type="text/css" href="custom/k/css/ext_override.css" />
<script type="text/javascript" src="custom/k/extjs4/ext-all{if $kreportDebug}-debug{/if}.js"></script>

<script type='text/javascript'>{$jsVariables}</script>
<script type='text/javascript' src='modules/KReports/js/kreportsbase1{if $kreportDebug}_debug{/if}.js'></script>
<script type="text/javascript" src="modules/KReports/js/kreportsbase2{if $kreportDebug}_debug{/if}.js"></script>
{$integrationpluginjs}
{$visualizationpluginjs}
{$presentation}


<script type="text/javascript" src="modules/KReports/js/kreportsbase4{if $kreportDebug}_debug{/if}.js"></script> 
<div id='reportMain' style="margin-left:0px; margin-right:10px">
<div id='toolbarArea'></div>
{if $dynamicoptions != ''}<div id='optionsArea' style='margin-top:5px;'></div>{/if}
{$visualization}
<div id='reportGrid' style='margin-top:5px;'>{$reportData}</div><br></div>