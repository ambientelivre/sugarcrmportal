<?php /* Smarty version 2.6.11, created on 2014-11-27 14:38:51
         compiled from include/SugarFields/Fields/Parent/SearchView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Parent/SearchView.tpl', 39, false),)), $this); ?>
{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
<select name='<?php echo $this->_tpl_vars['vardef']['type_name']; ?>
' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id='<?php echo $this->_tpl_vars['vardef']['type_name']; ?>
' title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' 
onchange='document.<?php echo $this->_tpl_vars['form_name']; ?>
.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value="";document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_id.value=""; 
	<?php echo $this->_tpl_vars['vardef']['type_name']; ?>
changeQS(); checkParentType(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, document.<?php echo $this->_tpl_vars['form_name']; ?>
.btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
);'>
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=$fields.parent_type.value}
</select>
<?php if ($this->_tpl_vars['displayParams']['split']): ?>
<br>
<?php endif; ?>
{if empty(<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
[$fields.parent_type.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent value = 1}
{/if}
<input type="text" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
" autocomplete="off"><input type="hidden" name="<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
" id="<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
"  {if $keepParent}value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_SELECT_BUTTON_TITLE}" 
	   accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button<?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?> firstChild<?php endif; ?>" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
	   onclick='open_popup(document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, 600, 400, "", true, false, <?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
, "single", true);'><img src="{sugar_getimagepath file="id-ff-select.png"}"></button>
<?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?>
<button type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
<?php endif; ?>
</span>
<script type="text/javascript">
function <?php echo $this->_tpl_vars['vardef']['type_name']; ?>
changeQS() {ldelim}
	new_module = document.forms["<?php echo $this->_tpl_vars['form_name']; ?>
"].elements["parent_type"].value;
	if(typeof(disabledModules[new_module]) != 'undefined') {ldelim}
		sqs_objects["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"]["disable"] = true;
		document.forms["<?php echo $this->_tpl_vars['form_name']; ?>
"].elements["<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"].readOnly = true;
	{rdelim} else {ldelim}
		sqs_objects["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"]["disable"] = false;
		document.forms["<?php echo $this->_tpl_vars['form_name']; ?>
"].elements["<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"].readOnly = false;
	{rdelim}	
	sqs_objects["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"]["modules"] = new Array(new_module);
    enableQS(false);
{rdelim}
</script>
{literal}
<?php echo $this->_tpl_vars['displayParams']['disabled_parent_types']; ?>

{/literal}