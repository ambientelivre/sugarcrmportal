<?php /* Smarty version 2.6.11, created on 2014-11-27 11:26:40
         compiled from modules/ModuleBuilder/tpls/MBPackage/deploy.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/ModuleBuilder/tpls/MBPackage/deploy.tpl', 38, false),)), $this); ?>
<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'img_loading.gif'), $this);?>
" align="absmiddle" />&nbsp;<?php echo $this->_tpl_vars['message']; ?>
 <?php echo $this->_tpl_vars['package']; ?>

<script type='text/javascript' language='Javascript'>ModuleBuilder.beginDeploy('<?php echo $this->_tpl_vars['package']; ?>
');</script>	