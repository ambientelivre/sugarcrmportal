<?php /* Smarty version 2.6.11, created on 2015-03-05 10:33:46
         compiled from cache/modules/ant_regionais/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/ant_regionais/SearchForm_basic.tpl', 10, false),array('function', 'math', 'cache/modules/ant_regionais/SearchForm_basic.tpl', 11, false),array('function', 'sugar_translate', 'cache/modules/ant_regionais/SearchForm_basic.tpl', 21, false),array('function', 'html_options', 'cache/modules/ant_regionais/SearchForm_basic.tpl', 108, false),array('function', 'sugar_getimagepath', 'cache/modules/ant_regionais/SearchForm_basic.tpl', 150, false),array('modifier', 'count', 'cache/modules/ant_regionais/SearchForm_basic.tpl', 137, false),)), $this); ?>

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
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REG_RAZAO_SOCIAL ','module' => 'ant_regionais'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['reg_razao_social_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_razao_social_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_razao_social_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_razao_social_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['reg_razao_social_basic']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='Razão Social' tabindex='' > 
   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REG_NM_FANTASIA','module' => 'ant_regionais'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['reg_nm_fantasia_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_nm_fantasia_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_nm_fantasia_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_nm_fantasia_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['reg_nm_fantasia_basic']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='Nome Fantadia da Regional' tabindex='' > 
   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNPJ','module' => 'ant_regionais'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['reg_cnpj_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_cnpj_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_cnpj_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_cnpj_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['reg_cnpj_basic']['name']; ?>
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
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ESTADO ','module' => 'ant_regionais'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php echo smarty_function_html_options(array('name' => 'reg_estado_basic[]','options' => $this->_tpl_vars['fields']['reg_estado_basic']['options'],'size' => '6','style' => "width: 150px",'multiple' => '1','selected' => $this->_tpl_vars['fields']['reg_estado_basic']['value']), $this);?>

   	   	</td>
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['basicMaxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CIDADE','module' => 'ant_regionais'), $this);?>

    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['reg_cidade_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_cidade_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_cidade_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_cidade_basic']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['reg_cidade_basic']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
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
</table><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_modified_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_created_by_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_assigned_user_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_clienteregionais_name_basic\']={"form":"search_form","method":"query","modules":["ant_cliente"],"group":"or","field_list":["name","id"],"populate_list":["ant_clienteregionais_name_basic","ant_client71d2cliente_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_pedido_regionais_name_basic\']={"form":"search_form","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_regionais_name_basic","ant_pedido17ef_pedido_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_pedido_gionais_1_name_basic\']={"form":"search_form","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_gionais_1_name_basic","ant_pedido4dba_pedido_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_estoqueregionais_name_basic\']={"form":"search_form","method":"query","modules":["ant_estoque_geral"],"group":"or","field_list":["name","id"],"populate_list":["ant_estoqueregionais_name_basic","ant_estoqu7abae_geral_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'search_form_ant_inutiliregionais_name_basic\']={"form":"search_form","method":"query","modules":["ant_inutilizado"],"group":"or","field_list":["name","id"],"populate_list":["ant_inutiliregionais_name_basic","ant_inutil66e6ilizado_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};</script>'; ?>