<?php /* Smarty version 2.6.11, created on 2014-12-23 11:08:40
         compiled from cache/modules/ant_regionais/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/ant_regionais/EditView.tpl', 36, false),array('function', 'counter', 'cache/modules/ant_regionais/EditView.tpl', 41, false),array('function', 'sugar_translate', 'cache/modules/ant_regionais/EditView.tpl', 59, false),array('function', 'html_options', 'cache/modules/ant_regionais/EditView.tpl', 177, false),array('function', 'sugar_getimagepath', 'cache/modules/ant_regionais/EditView.tpl', 376, false),array('modifier', 'default', 'cache/modules/ant_regionais/EditView.tpl', 42, false),array('modifier', 'strip_semicolon', 'cache/modules/ant_regionais/EditView.tpl', 60, false),)), $this); ?>


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
" class="button primary" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_HEADER"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL_HEADER"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=ant_regionais'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ant_regionais", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="EditView_tabs"
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
<td valign="top" id='_label' width='12.5%' scope="row">
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
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_client71d2cliente_ida","name":"ant_clienteregionais_name"}}'; ?>
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

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='ant_pedido_regionais_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
" class="sqsEnabled" tabindex="117" id="<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['ant_pedido17ef_pedido_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
" tabindex="117" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_pedido17ef_pedido_ida","name":"ant_pedido_regionais_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
" tabindex="117" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['ant_pedido_regionais_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<td valign="top" id='ant_pedido_gionais_1_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE','module' => 'ant_regionais'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
" class="sqsEnabled" tabindex="118" id="<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['ant_pedido4dba_pedido_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
" tabindex="118" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ant_pedido4dba_pedido_ida","name":"ant_pedido_gionais_1_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
" tabindex="118" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['ant_pedido_gionais_1_name']['name']; ?>
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
' title='' tabindex='119' > 
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
' title='' tabindex='120' > 
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
' title='' tabindex='121' > 
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
' title='' tabindex='122' > 
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
" class="sqsEnabled" tabindex="124" id="<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
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
" tabindex="124" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
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
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"created_by","user_name":"created_by_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['created_by_name']['name']; ?>
" tabindex="124" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
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
" class="sqsEnabled" tabindex="126" id="<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
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
" tabindex="126" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
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
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"modified_user_id","user_name":"modified_by_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['modified_by_name']['name']; ?>
" tabindex="126" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
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
" class="button primary" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_FOOTER"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL_FOOTER"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=ant_regionais'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ant_regionais", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<?php echo $this->_tpl_vars['overlibStuff']; ?>

<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
</script><?php echo '
<script type="text/javascript">
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Data da Criação\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Data da Modificação\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_razao_social\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_RAZAO_SOCIAL ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_nm_fantasia\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_NM_FANTASIA','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_logradouro\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_LOGRADOURO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_numero\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ REG_NUMERO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_complemento\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_COMPLEMENTO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_bairro\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_BAIRRO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_inscricao_estadual\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_INSCRICAO_ESTADUAL','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_cnae\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNAE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_contato\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CONTATO','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_email\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_EMAIL','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_orgao_vinculado_pncebt\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ORGAO_VINCULADO_PNCEBT','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_cep\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CEP','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_cidade\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CIDADE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_cnpj\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_CNPJ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_estado\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_ESTADO ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_tp_logradouro\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_TP_LOGRADOURO ','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'reg_telefone\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_REG_TELEFONE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'ant_clienteregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'ant_pedido_regionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'ant_pedido_gionais_1_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'ant_estoqueregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'ant_inutiliregionais_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'modified_by_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'modified_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'created_by_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'created_by\' );
addToValidateBinaryDependency(\'EditView\', \'ant_clienteregionais_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'ant_client71d2cliente_ida\' );
addToValidateBinaryDependency(\'EditView\', \'ant_pedido_regionais_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'ant_pedido17ef_pedido_ida\' );
addToValidateBinaryDependency(\'EditView\', \'ant_pedido_gionais_1_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ant_regionais','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE','module' => 'ant_regionais','for_js' => true), $this); echo '\', \'ant_pedido4dba_pedido_ida\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_ant_clienteregionais_name\']={"form":"EditView","method":"query","modules":["ant_cliente"],"group":"or","field_list":["name","id"],"populate_list":["ant_clienteregionais_name","ant_client71d2cliente_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'EditView_ant_pedido_regionais_name\']={"form":"EditView","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_regionais_name","ant_pedido17ef_pedido_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'EditView_ant_pedido_gionais_1_name\']={"form":"EditView","method":"query","modules":["ant_pedido"],"group":"or","field_list":["name","id"],"populate_list":["ant_pedido_gionais_1_name","ant_pedido4dba_pedido_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'EditView_created_by_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name","created_by"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};sqs_objects[\'EditView_modified_by_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name","modified_user_id"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Nada foi Encontrado"};</script>'; ?>
