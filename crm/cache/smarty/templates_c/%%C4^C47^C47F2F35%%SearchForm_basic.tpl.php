<?php /* Smarty version 2.6.11, created on 2015-03-19 14:46:37
         compiled from cache/modules/ant_inutilizado/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/ant_inutilizado/SearchForm_basic.tpl', 10, false),array('function', 'math', 'cache/modules/ant_inutilizado/SearchForm_basic.tpl', 11, false),array('function', 'sugar_translate', 'cache/modules/ant_inutilizado/SearchForm_basic.tpl', 21, false),array('function', 'sugar_getimagepath', 'cache/modules/ant_inutilizado/SearchForm_basic.tpl', 30, false),array('modifier', 'count', 'cache/modules/ant_inutilizado/SearchForm_basic.tpl', 244, false),)), $this); ?>

<?php if (! isset ( $this->_tpl_vars['templateMeta']['maxColumnsBasic'] )): ?>
	<?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumns']);  else: ?>
    <?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumnsBasic']);  endif; ?>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<input type="text" name="<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['name']; ?>
"  class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden"  id="<?php echo $this->_tpl_vars['fields']['ant_inutil2440etarias_idb_basic']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['ant_inutil2440etarias_idb_basic']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"ant_inutil2440etarias_idb_basic","name":"ant_inutilicretarias_name_basic"}}'; ?>
, "single", true);'><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" onclick="this.form.<?php echo $this->_tpl_vars['fields']['ant_inutilicretarias_name_basic']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['ant_inutil2440etarias_idb_basic']['name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>

   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<input type="text" name="<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['name']; ?>
"  class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden"  id="<?php echo $this->_tpl_vars['fields']['ant_inutil5c3egionais_idb_basic']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['ant_inutil5c3egionais_idb_basic']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"ant_inutil5c3egionais_idb_basic","name":"ant_inutiliregionais_name_basic"}}'; ?>
, "single", true);'><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" onclick="this.form.<?php echo $this->_tpl_vars['fields']['ant_inutiliregionais_name_basic']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['ant_inutil5c3egionais_idb_basic']['name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>

   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IN_DATA','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['in_data_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['in_data_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['in_data_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['in_data_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['in_data_basic']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IN_OBS','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (empty ( $this->_tpl_vars['fields']['in_obs_basic']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['in_obs_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['in_obs_basic']['value']);  endif; ?>  




<textarea  id='<?php echo $this->_tpl_vars['fields']['in_obs_basic']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['in_obs_basic']['name']; ?>
'
rows="4" 
cols="20" 
title='' tabindex="" ><?php echo $this->_tpl_vars['value']; ?>
</textarea>



   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IN_DESTINO','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (empty ( $this->_tpl_vars['fields']['in_destino_basic']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['in_destino_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['in_destino_basic']['value']);  endif; ?>  




<textarea  id='<?php echo $this->_tpl_vars['fields']['in_destino_basic']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['in_destino_basic']['name']; ?>
'
rows="4" 
cols="20" 
title='' tabindex="" ><?php echo $this->_tpl_vars['value']; ?>
</textarea>



   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IN_LINK','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
	<?php if (! empty ( $this->_tpl_vars['fields']['in_link_basic']['value'] )): ?>
	<input type='text' name='<?php echo $this->_tpl_vars['fields']['in_link_basic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['in_link_basic']['name']; ?>
' size='30' 
	   maxlength='255' value='<?php echo $this->_tpl_vars['fields']['in_link_basic']['value']; ?>
' title='' tabindex=''>
	<?php else: ?>
	<input type='text' name='<?php echo $this->_tpl_vars['fields']['in_link_basic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['in_link_basic']['name']; ?>
' size='30' 
	   maxlength='255' 
	   <?php if ($this->_tpl_vars['displayView'] == 'advanced_search' || $this->_tpl_vars['displayView'] == 'basic_search'): ?>value=''<?php else: ?>value='http://'<?php endif; ?> title='' tabindex=''>
	<?php endif; ?>

   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IN_DT_NF','module' => 'ant_inutilizado'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['in_dt_nf_basic']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="" onblur="combo_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
.update(); ">
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_trigger" align="absmiddle">&nbsp;
</td>
<td nowrap>
<div id="<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['in_dt_nf_basic']['name']]['value']; ?>
">
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
 = new Datetimecombo("<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['in_dt_nf_basic']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "", '', '<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['in_dt_nf_basic']['name_flag']]['value']; ?>
', true); 
//Render the remaining widget fields
text = combo_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
.html('');
document.getElementById('<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
.jsscript(''));
</script>

<script type="text/javascript">
function update_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_available() {
      YAHOO.util.Event.onAvailable("<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_date", this.handleOnAvailable, this); 
}

update_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_available.prototype.handleOnAvailable = function(me) {
	Calendar.setup ({
	onClose : update_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
,
	inputField : "<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_date",
	ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
	button : "<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers:false
	});
	
	//Call update for first time to round hours and minute values
	combo_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
.update(false);
}

var obj_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
 = new update_<?php echo $this->_tpl_vars['fields']['in_dt_nf_basic']['name']; ?>
_available(); 
</script>
   	   	</td>
    <?php if (count($this->_tpl_vars['formData']) >= $this->_tpl_vars['basicMaxColumns']+1): ?>
    </tr>
    <tr>
	<td colspan="<?php echo $this->_tpl_vars['searchTableColumnCount']; ?>
">
    <?php else: ?>
	<td class="sumbitButtons">
    <?php endif; ?>
	    <input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
' accessKey='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_KEY']; ?>
' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
' id='search_form_submit'/>&nbsp;
	    <input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
' accessKey='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/>
        <?php if ($this->_tpl_vars['HAS_ADVANCED_SEARCH']): ?>
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('<?php echo $this->_tpl_vars['module']; ?>
|advanced_search','<?php echo $this->_tpl_vars['module']; ?>
|basic_search')" href="#"><?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_SEARCH']; ?>
</a>
	    <?php endif; ?>
    </td>
	<td class="helpIcon" width="*"><img  border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src=<?php echo smarty_function_sugar_getimagepath(array('file' => 'close.gif'), $this);?>
></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" class="help-search"></td>
	</tr>
</table><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_created_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_assigned_user_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_inutiliregionais_name_basic\']={"form":"search_form","method":"query","modules":["ant_regionais"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutiliregionais_name_basic","ant_inutil5c3egionais_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_inutilicretarias_name_basic\']={"form":"search_form","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutilicretarias_name_basic","ant_inutil2440etarias_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>'; ?>