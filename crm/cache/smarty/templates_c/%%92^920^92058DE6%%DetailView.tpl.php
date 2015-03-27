<?php /* Smarty version 2.6.11, created on 2015-03-25 12:19:23
         compiled from cache/modules/ant_log_estoque/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/ant_log_estoque/DetailView.tpl', 28, false),array('function', 'counter', 'cache/modules/ant_log_estoque/DetailView.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/ant_log_estoque/DetailView.tpl', 42, false),array('function', 'sugar_number_format', 'cache/modules/ant_log_estoque/DetailView.tpl', 117, false),array('modifier', 'strip_semicolon', 'cache/modules/ant_log_estoque/DetailView.tpl', 43, false),)), $this); ?>


<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="this.form.return_module.value='ant_log_estoque'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='ant_log_estoque'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';" type="submit" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='ant_log_estoque'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
');" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ant_log_estoque", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align="right" width="100%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="ant_log_estoque_detailview_tabs"
>
<div >
<div id='DEFAULT' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table id='detailpanel_1' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_data']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_DATA','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_data']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_data']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_data']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_data']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_data']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_data']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_prod']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_PROD','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_prod']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_prod']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_prod']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_prod']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_prod']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_prod']['value']; ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_lote']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_LOTE','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_lote']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_lote']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_lote']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_lote']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_lote']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_lote']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_qtd']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_QTD','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_qtd']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_qtd']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['log_qtd']['value']), $this);?>

</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_sec_origem']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_SEC_ORIGEM','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_sec_origem']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_sec_origem']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_sec_origem']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_sec_origem']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_sec_origem']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_sec_origem']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_sec_destino']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_SEC_DESTINO','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_sec_destino']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_sec_destino']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_sec_destino']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_sec_destino']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_sec_destino']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_sec_destino']['value']; ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_reg_destino']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_REG_DESTINO','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_reg_destino']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_reg_destino']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_reg_destino']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_reg_destino']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_reg_destino']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_reg_destino']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_reg_origem']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_REG_ORIGEM','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_reg_origem']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_reg_origem']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_reg_origem']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_reg_origem']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_reg_origem']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_reg_origem']['value']; ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_clie_dest']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_CLIE_DEST','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_clie_dest']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_clie_dest']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_clie_dest']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_clie_dest']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_clie_dest']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_clie_dest']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['ant_log_estt_produto_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ant_log_estt_produto_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['ant_log_es537eproduto_idb']['value'] )): ?><a href="index.php?module=ant_produto&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['ant_log_es537eproduto_idb']['value']; ?>
"><?php endif; ?>
<span id="ant_log_es537eproduto_idb" class="sugar_field"><?php echo $this->_tpl_vars['fields']['ant_log_estt_produto_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['ant_log_es537eproduto_idb']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['log_tecpar']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LOG_TECPAR','module' => 'ant_log_estoque'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['log_tecpar']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['log_tecpar']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['log_tecpar']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['log_tecpar']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['log_tecpar']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['log_tecpar']['value']; ?>
</span>
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
</div></div>

</form>