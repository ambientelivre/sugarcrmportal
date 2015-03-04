<?php /* Smarty version 2.6.11, created on 2015-03-02 11:59:07
         compiled from cache/modules/ant_pedido/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/ant_pedido/SearchForm_basic.tpl', 10, false),array('function', 'math', 'cache/modules/ant_pedido/SearchForm_basic.tpl', 11, false),array('function', 'sugar_translate', 'cache/modules/ant_pedido/SearchForm_basic.tpl', 21, false),array('function', 'html_options', 'cache/modules/ant_pedido/SearchForm_basic.tpl', 64, false),array('function', 'sugar_getimagepath', 'cache/modules/ant_pedido/SearchForm_basic.tpl', 70, false),array('modifier', 'count', 'cache/modules/ant_pedido/SearchForm_basic.tpl', 182, false),)), $this); ?>

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
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PED_CODIGO_BOLETO','module' => 'ant_pedido'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['ped_codigo_boleto_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ped_codigo_boleto_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ped_codigo_boleto_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['ped_codigo_boleto_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['ped_codigo_boleto_basic']['name']; ?>
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
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'ant_pedido'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php $this->assign('id', $this->_tpl_vars['fields']['date_entered_basic']['name']); ?>

<?php if (isset ( $_REQUEST['date_entered_basic_range_choice'] )):  $this->assign('starting_choice', $_REQUEST['date_entered_basic_range_choice']);  else:  $this->assign('starting_choice', "=");  endif; ?>

<div style="white-space:nowrap !important;">
<select id="<?php echo $this->_tpl_vars['id']; ?>
_range_choice" name="<?php echo $this->_tpl_vars['id']; ?>
_range_choice" style="width:125px !important;" onchange="<?php echo $this->_tpl_vars['id']; ?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['date_entered_basic']['options'],'selected' => $this->_tpl_vars['starting_choice']), $this);?>

</select>
</div>

<div id="<?php echo $this->_tpl_vars['id']; ?>
_range_div" style="<?php if (preg_match ( '/^\[/' , $_REQUEST['range_date_entered_basic'] ) || $this->_tpl_vars['starting_choice'] == 'between'): ?>display:none<?php else: ?>display:''<?php endif; ?>;">
<input autocomplete="off" type="text" name="range_<?php echo $this->_tpl_vars['id']; ?>
" id="range_<?php echo $this->_tpl_vars['id']; ?>
" value='<?php if (empty ( $_REQUEST['range_date_entered_basic'] ) && ! empty ( $_REQUEST['date_entered_basic'] )):  echo $_REQUEST['date_entered_basic'];  else:  echo $_REQUEST['range_date_entered_basic'];  endif; ?>' title=''  tabindex='' size="11" style="width:100px !important;">
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['id']; ?>
_trigger" align="absmiddle"/>
<script type="text/javascript">
Calendar.setup ({
inputField : "range_<?php echo $this->_tpl_vars['id']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['id']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
    
</div>

<div id="<?php echo $this->_tpl_vars['id']; ?>
_between_range_div" style="<?php if ($this->_tpl_vars['starting_choice'] == 'between'): ?>display:'';<?php else: ?>display:none;<?php endif; ?>">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_entered_basic']['value']); ?>
<input autocomplete="off" type="text" name="start_range_<?php echo $this->_tpl_vars['id']; ?>
" id="start_range_<?php echo $this->_tpl_vars['id']; ?>
" value='<?php echo $_REQUEST['start_range_date_entered_basic']; ?>
' title=''  tabindex='' size="11" style="width:100px !important;">
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="start_range_<?php echo $this->_tpl_vars['id']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "start_range_<?php echo $this->_tpl_vars['id']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "start_range_<?php echo $this->_tpl_vars['id']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
 
<?php echo $this->_tpl_vars['APP']['LBL_AND']; ?>

<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_entered_basic']['value']); ?>
<input autocomplete="off" type="text" name="end_range_<?php echo $this->_tpl_vars['id']; ?>
" id="end_range_<?php echo $this->_tpl_vars['id']; ?>
" value='<?php echo $_REQUEST['end_range_date_entered_basic']; ?>
' title=''  tabindex='' size="11" style="width:100px !important;" maxlength="10">
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="end_range_<?php echo $this->_tpl_vars['id']; ?>
_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({
inputField : "end_range_<?php echo $this->_tpl_vars['id']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "end_range_<?php echo $this->_tpl_vars['id']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
 
</div>


<script type='text/javascript'>

function <?php echo $this->_tpl_vars['id']; ?>
_range_change(val) 
{
  if(val == 'between') {
     document.getElementById("range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';  
     document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_range_div").style.display = 'none';
     document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_between_range_div").style.display = ''; 
  } else if (val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than') {
     if((/^\[.*\]$/).test(document.getElementById("range_<?php echo $this->_tpl_vars['id']; ?>
").value))
     {
     	document.getElementById("range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
     }
     document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
     document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
     document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_range_div").style.display = '';
     document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_between_range_div").style.display = 'none';
  } else {
     document.getElementById("range_<?php echo $this->_tpl_vars['id']; ?>
").value = '[' + val + ']';    
     document.getElementById("start_range_<?php echo $this->_tpl_vars['id']; ?>
").value = '';
     document.getElementById("end_range_<?php echo $this->_tpl_vars['id']; ?>
").value = ''; 
     document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_range_div").style.display = 'none';
     document.getElementById("<?php echo $this->_tpl_vars['id']; ?>
_between_range_div").style.display = 'none';         
  }
}

var <?php echo $this->_tpl_vars['id']; ?>
_range_reset = function()
{
<?php echo $this->_tpl_vars['id']; ?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $this->_tpl_vars['id']; ?>
_range_reset);
}

});
</script>
   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PED_STATUS ','module' => 'ant_pedido'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php echo smarty_function_html_options(array('name' => 'ped_status_basic[]','options' => $this->_tpl_vars['fields']['ped_status_basic']['options'],'size' => '6','style' => "width: 150px",'multiple' => '1','selected' => $this->_tpl_vars['fields']['ped_status_basic']['value']), $this);?>

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
</table><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_created_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_assigned_user_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_pedido_cretarias_name_basic\']={"form":"search_form","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_cretarias_name_basic","ant_pedido14e4etarias_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_pedido_etarias_1_name_basic\']={"form":"search_form","method":"query","modules":["ant_secretarias"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_etarias_1_name_basic","ant_pedidoc70eetarias_idb_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>'; ?>