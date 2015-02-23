
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<input type="text" name="{$fields.ant_inutilicretarias_name_basic.name}"  class="sqsEnabled" tabindex="" id="{$fields.ant_inutilicretarias_name_basic.name}" size="" value="{$fields.ant_inutilicretarias_name_basic.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.ant_inutil2440etarias_idb_basic.name}" value="{$fields.ant_inutil2440etarias_idb_basic.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_inutilicretarias_name_basic.name}" tabindex="" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.ant_inutilicretarias_name_basic.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"ant_inutil2440etarias_idb_basic","name":"ant_inutilicretarias_name_basic"}}{/literal}, "single", true);'><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_inutilicretarias_name_basic.name}" tabindex="" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.{$fields.ant_inutilicretarias_name_basic.name}.value = ''; this.form.{$fields.ant_inutil2440etarias_idb_basic.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>

   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<input type="text" name="{$fields.ant_inutiliregionais_name_basic.name}"  class="sqsEnabled" tabindex="" id="{$fields.ant_inutiliregionais_name_basic.name}" size="" value="{$fields.ant_inutiliregionais_name_basic.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.ant_inutil5c3egionais_idb_basic.name}" value="{$fields.ant_inutil5c3egionais_idb_basic.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ant_inutiliregionais_name_basic.name}" tabindex="" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.ant_inutiliregionais_name_basic.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"ant_inutil5c3egionais_idb_basic","name":"ant_inutiliregionais_name_basic"}}{/literal}, "single", true);'><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ant_inutiliregionais_name_basic.name}" tabindex="" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.{$fields.ant_inutiliregionais_name_basic.name}.value = ''; this.form.{$fields.ant_inutil5c3egionais_idb_basic.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>

   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_IN_DATA' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if strlen($fields.in_data_basic.value) <= 0}
{assign var="value" value=$fields.in_data_basic.default_value }
{else}
{assign var="value" value=$fields.in_data_basic.value }
{/if}  
<input type='text' name='{$fields.in_data_basic.name}' 
    id='{$fields.in_data_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='' tabindex='' > 
   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_IN_OBS' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if empty($fields.in_obs_basic.value)}
{assign var="value" value=$fields.in_obs_basic.default_value }
{else}
{assign var="value" value=$fields.in_obs_basic.value }
{/if}  




<textarea  id='{$fields.in_obs_basic.name}' name='{$fields.in_obs_basic.name}'
rows="4" 
cols="20" 
title='' tabindex="" >{$value}</textarea>



   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_IN_DESTINO' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
{if empty($fields.in_destino_basic.value)}
{assign var="value" value=$fields.in_destino_basic.default_value }
{else}
{assign var="value" value=$fields.in_destino_basic.value }
{/if}  




<textarea  id='{$fields.in_destino_basic.name}' name='{$fields.in_destino_basic.name}'
rows="4" 
cols="20" 
title='' tabindex="" >{$value}</textarea>



   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_IN_LINK' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
	{if !empty($fields.in_link_basic.value)}
	<input type='text' name='{$fields.in_link_basic.name}' id='{$fields.in_link_basic.name}' size='30' 
	   maxlength='255' value='{$fields.in_link_basic.value}' title='' tabindex=''>
	{else}
	<input type='text' name='{$fields.in_link_basic.name}' id='{$fields.in_link_basic.name}' size='30' 
	   maxlength='255' 
	   {if $displayView=='advanced_search'||$displayView=='basic_search'}value=''{else}value='http://'{/if} title='' tabindex=''>
	{/if}

   	   	</td>
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	{if ($index % $basicMaxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		{sugar_translate label='LBL_IN_DT_NF' module='ant_inutilizado'}
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.in_dt_nf_basic.name}_date" value="{$fields[$fields.in_dt_nf_basic.name].value}" size="11" maxlength="10" title='' tabindex="" onblur="combo_{$fields.in_dt_nf_basic.name}.update(); ">
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.in_dt_nf_basic.name}_trigger" align="absmiddle">&nbsp;
</td>
<td nowrap>
<div id="{$fields.in_dt_nf_basic.name}_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" id="{$fields.in_dt_nf_basic.name}" name="{$fields.in_dt_nf_basic.name}" value="{$fields[$fields.in_dt_nf_basic.name].value}">
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_{$fields.in_dt_nf_basic.name} = new Datetimecombo("{$fields[$fields.in_dt_nf_basic.name].value}", "{$fields.in_dt_nf_basic.name}", "{$TIME_FORMAT}", "", '', '{$fields[$fields.in_dt_nf_basic.name_flag].value}', true); 
//Render the remaining widget fields
text = combo_{$fields.in_dt_nf_basic.name}.html('');
document.getElementById('{$fields.in_dt_nf_basic.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.in_dt_nf_basic.name}.jsscript(''));
</script>

<script type="text/javascript">
function update_{$fields.in_dt_nf_basic.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.in_dt_nf_basic.name}_date", this.handleOnAvailable, this); 
{rdelim}

update_{$fields.in_dt_nf_basic.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	Calendar.setup ({ldelim}
	onClose : update_{$fields.in_dt_nf_basic.name},
	inputField : "{$fields.in_dt_nf_basic.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.in_dt_nf_basic.name}_trigger",
	singleClick : true,
	step : 1,
	weekNumbers:false
	{rdelim});
	
	//Call update for first time to round hours and minute values
	combo_{$fields.in_dt_nf_basic.name}.update(false);
{rdelim}

var obj_{$fields.in_dt_nf_basic.name} = new update_{$fields.in_dt_nf_basic.name}_available(); 
</script>
   	   	</td>
    {if $formData|@count >= $basicMaxColumns+1}
    </tr>
    <tr>
	<td colspan="{$searchTableColumnCount}">
    {else}
	<td class="sumbitButtons">
    {/if}
	    <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' accessKey='{$APP.LBL_SEARCH_BUTTON_KEY}' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}' id='search_form_submit'/>&nbsp;
	    <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' accessKey='{$APP.LBL_CLEAR_BUTTON_KEY}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
        {if $HAS_ADVANCED_SEARCH}
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('{$module}|advanced_search','{$module}|basic_search')" href="#">{$APP.LNK_ADVANCED_SEARCH}</a>
	    {/if}
    </td>
	<td class="helpIcon" width="*"><img  border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={sugar_getimagepath file='close.gif'}></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" class="help-search"></td>
	</tr>
</table>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_inutiliregionais_name_basic']={"form":"search_form","method":"query","modules":["ant_regionais"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutiliregionais_name_basic","ant_inutil5c3egionais_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects['search_form_ant_inutilicretarias_name_basic']={"form":"search_form","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutilicretarias_name_basic","ant_inutil2440etarias_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>{/literal}