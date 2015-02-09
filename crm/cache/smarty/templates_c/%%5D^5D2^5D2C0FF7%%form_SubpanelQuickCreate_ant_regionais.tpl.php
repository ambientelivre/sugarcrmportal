<?php /* Smarty version 2.6.11, created on 2014-12-02 09:20:48
         compiled from cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 37, false),array('function', 'counter', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 42, false),array('function', 'sugar_translate', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 48, false),array('function', 'html_options', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 180, false),array('function', 'sugar_getimagepath', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 379, false),array('modifier', 'default', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 43, false),array('modifier', 'strip_semicolon', 'cache/modules/ant_regionais/form_SubpanelQuickCreate_ant_regionais.tpl', 49, false),)), $this); ?>


<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['relate_to'];  elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('form_SubpanelQuickCreate_ant_regionais'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'ant_regionais_subpanel_save_button');return false;" type="submit" name="ant_regionais_subpanel_save_button" id="ant_regionais_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('ant_regionais_subpanel_cancel_button');return false;" type="submit" name="ant_regionais_subpanel_cancel_button" id="ant_regionais_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="ant_regionais_subpanel_full_form_button" id="ant_regionais_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ant_regionais", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="form_SubpanelQuickCreate_ant_regionais_tabs"
>
<div >
<div id="Default_<?php echo $this->_tpl_vars['module']; ?>
_Subpanel">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='ant_regionacretarias_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_REGIONAIS_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_razao_social_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_RAZAO_SOCIAL ','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_razao_social']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_razao_social']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_razao_social']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_razao_social']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_razao_social']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='Raz&atilde;o Social' tabindex='101' > 
<td valign="top" id='reg_nm_fantasia_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_NM_FANTASIA','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_nm_fantasia']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_nm_fantasia']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_nm_fantasia']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_nm_fantasia']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_nm_fantasia']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='Nome Fantadia da Regional' tabindex='102' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_cep_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CEP','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_cep']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_cep']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_cep']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_cep']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_cep']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='103' > 
<td valign="top" id='reg_bairro_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_BAIRRO','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_bairro']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_bairro']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_bairro']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_bairro']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_bairro']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='104' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_cidade_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CIDADE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_cidade']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_cidade']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_cidade']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_cidade']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_cidade']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='105' > 
<td valign="top" id='reg_estado_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ESTADO ','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['reg_estado']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['reg_estado']['name']; ?>
" 
title='' tabindex="106"  
>
<?php if (isset ( $this->_tpl_vars['fields']['reg_estado']['value'] ) && $this->_tpl_vars['fields']['reg_estado']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['reg_estado']['options'],'selected' => $this->_tpl_vars['fields']['reg_estado']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['reg_estado']['options'],'selected' => $this->_tpl_vars['fields']['reg_estado']['default']), $this);?>

<?php endif; ?>
</select>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_tp_logradouro_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_TP_LOGRADOURO ','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['reg_tp_logradouro']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['reg_tp_logradouro']['name']; ?>
" 
title='' tabindex="107"  
>
<?php if (isset ( $this->_tpl_vars['fields']['reg_tp_logradouro']['value'] ) && $this->_tpl_vars['fields']['reg_tp_logradouro']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['reg_tp_logradouro']['options'],'selected' => $this->_tpl_vars['fields']['reg_tp_logradouro']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['reg_tp_logradouro']['options'],'selected' => $this->_tpl_vars['fields']['reg_tp_logradouro']['default']), $this);?>

<?php endif; ?>
</select>
<td valign="top" id='reg_logradouro_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_LOGRADOURO','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_logradouro']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_logradouro']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_logradouro']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_logradouro']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_logradouro']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='108' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_numero_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ REG_NUMERO','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_numero']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_numero']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_numero']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_numero']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_numero']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='109' > 
<td valign="top" id='reg_complemento_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_COMPLEMENTO','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_complemento']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_complemento']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_complemento']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_complemento']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_complemento']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='110' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_cnpj_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNPJ','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_cnpj']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_cnpj']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_cnpj']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_cnpj']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_cnpj']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='111' > 
<td valign="top" id='reg_inscricao_estadual_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_INSCRICAO_ESTADUAL','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_inscricao_estadual']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_inscricao_estadual']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_inscricao_estadual']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_inscricao_estadual']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_inscricao_estadual']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='112' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_cnae_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNAE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_cnae']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_cnae']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_cnae']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_cnae']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_cnae']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='113' > 
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='ant_clienteregionais_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
" class="sqsEnabled" tabindex="115" id="<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['ant_client71d2cliente_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
" tabindex="115" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_ant_regionais","field_to_name_array":{"id":"ant_client71d2cliente_ida","name":"ant_clienteregionais_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
" tabindex="115" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['ant_clienteregionais_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
<div id="LBL_EDITVIEW_PANEL3">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL3','module' => 'ant_regionais'), $this);?>
</h4>
</th>
</tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_contato_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CONTATO','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_contato']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_contato']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_contato']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_contato']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_contato']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='117' > 
<td valign="top" id='reg_telefone_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_TELEFONE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_telefone']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_telefone']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_telefone']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_telefone']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_telefone']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='118' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='reg_email_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_EMAIL','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_email']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_email']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_email']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_email']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_email']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='119' > 
<td valign="top" id='reg_orgao_vinculado_pncebt_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ORGAO_VINCULADO_PNCEBT','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['reg_orgao_vinculado_pncebt']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['reg_orgao_vinculado_pncebt']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['reg_orgao_vinculado_pncebt']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['reg_orgao_vinculado_pncebt']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['reg_orgao_vinculado_pncebt']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='120' > 
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
<?php endif; ?>
<div id="LBL_EDITVIEW_PANEL1">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'ant_regionais'), $this);?>
</h4>
</th>
</tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='date_entered_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['date_entered']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['date_entered']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['date_entered']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_entered']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['date_entered']['value']; ?>
</span>
<td valign="top" id='created_by_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" class="sqsEnabled" tabindex="122" id="<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['created_by_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['created_by_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['created_by_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['created_by']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" tabindex="122" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['created_by_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_ant_regionais","field_to_name_array":{"id":"created_by","user_name":"created_by_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" tabindex="122" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['created_by_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='date_modified_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_MODIFIED','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['date_modified']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['date_modified']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['date_modified']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_modified']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['date_modified']['value']; ?>
</span>
<td valign="top" id='modified_by_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" class="sqsEnabled" tabindex="124" id="<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['modified_by_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['modified_by_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['modified_by_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['modified_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" tabindex="124" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['modified_by_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_ant_regionais","field_to_name_array":{"id":"modified_user_id","user_name":"modified_by_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" tabindex="124" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['modified_by_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
<?php endif; ?>
</div></div>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';if(check_form('form_SubpanelQuickCreate_ant_regionais'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'ant_regionais_subpanel_save_button');return false;" type="submit" name="ant_regionais_subpanel_save_button" id="ant_regionais_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('ant_regionais_subpanel_cancel_button');return false;" type="submit" name="ant_regionais_subpanel_cancel_button" id="ant_regionais_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_KEY']; ?>
" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="ant_regionais_subpanel_full_form_button" id="ant_regionais_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ant_regionais", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<?php echo $this->_tpl_vars['overlibStuff']; ?>

<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_ant_regionais",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_ant_regionais) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
</script><?php echo '
<script type="text/javascript">
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'date_entered_date\', \'date\', false,\'Data da Criação\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'date_modified_date\', \'date\', false,\'Data da Modificação\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_razao_social\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_RAZAO_SOCIAL ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_nm_fantasia\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_NM_FANTASIA','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_logradouro\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_LOGRADOURO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_numero\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ REG_NUMERO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_complemento\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_COMPLEMENTO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_bairro\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_BAIRRO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_inscricao_estadual\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_INSCRICAO_ESTADUAL','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_cnae\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNAE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_contato\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CONTATO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_email\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_EMAIL','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_orgao_vinculado_pncebt\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ORGAO_VINCULADO_PNCEBT','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_cep\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CEP','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_cidade\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CIDADE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_cnpj\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNPJ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_estado\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ESTADO ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_tp_logradouro\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_TP_LOGRADOURO ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'reg_telefone\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_TELEFONE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'ant_clienteregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'ant_secretaregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'ant_estoqueregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'form_SubpanelQuickCreate_ant_regionais\', \'ant_inutiliregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_ant_regionais\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_ant_regionais\', \'modified_by_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'modified_user_id\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_ant_regionais\', \'created_by_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'created_by\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_ant_regionais\', \'ant_clienteregionais_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'ant_client71d2cliente_ida\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'form_SubpanelQuickCreate_ant_regionais_ant_clienteregionais_name\']={"form":"form_SubpanelQuickCreate_ant_regionais","method":"query","modules":["ant_cliente"],"group":"or","field_list":["name","id"],"populate_list":["ant_clienteregionais_name","ant_client71d2cliente_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'form_SubpanelQuickCreate_ant_regionais_created_by_name\']={"form":"form_SubpanelQuickCreate_ant_regionais","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'form_SubpanelQuickCreate_ant_regionais_modified_by_name\']={"form":"form_SubpanelQuickCreate_ant_regionais","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name","modified_user_id"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};</script>'; ?>
