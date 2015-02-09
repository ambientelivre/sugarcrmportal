<?php
/**
* @package Admin-Menu-Manager (com_adminmenumanager)
* @version 2.2.1
* @copyright Copyright (C) 2012 - 2014 Carsten Engel. All rights reserved.
* @license GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html 
* @author http://www.pages-and-items.com
*/

// no direct access.
defined('_JEXEC') or die;

?>
<script language="JavaScript" type="text/javascript">

Joomla.submitbutton = function(task){		
	if (task=='cancel'){			
		document.location.href = 'index.php?option=com_adminmenumanager&view=menuitems';		
	}			
	if (task=='menuitemsimport_save'){	
		if(document.getElementById('type_joomla').checked){		
			something_is_selected = 0;	
			for (i = 1; i <= <?php echo count($this->joomla_menuitems); ?>; i++){
				if(document.getElementById('checkbox_'+i).checked){
					something_is_selected = 1;
				}
			}
			if(something_is_selected){	
				<?php
				if($this->controller->get_version_type()=='free'){
				?>
					alert('<?php echo addslashes(JText::_('COM_ADMINMENUMANAGER_NOT_IN_FREE_VERSION')); ?>');
					return false;
				<?php
				}else{
				?>
					submitform('menuitemsimport_save');	
				<?php
				}
				?>
			}else{
				alert('<?php echo addslashes(JText::_('COM_MENUS_NO_ITEM_SELECTED')); ?>');
			}
		}	
		if(document.getElementById('type_textarea').checked){	
			if (document.getElementById('textarea_csv').value == '') {			
				alert('<?php echo addslashes(JText::_('COM_MEDIA_ERROR_WARNNOTEMPTY')); ?>');
				return;
			}else{
				submitform('menuitemsimport_save');
			}
		}
		if(document.getElementById('type_file').checked){	
			if (document.getElementById('file_csv').value == '') {			
				alert('<?php echo addslashes(JText::_('COM_MEDIA_ERROR_WARNNOTEMPTY')); ?>');
				return;
			}else{
				submitform('menuitemsimport_save');
			}
		}	
		return false;
	}	
}

function change_type(type){	
	document.getElementById('div_joomla').style.display = 'none';	
	document.getElementById('div_file').style.display = 'none';
	document.getElementById('div_textarea').style.display = 'none';
	document.getElementById('div_'+type).style.display = 'block';	
}

function select_all_from_column(select_all, start, end){
	if(document.getElementById('select_all_'+select_all).checked==true){
		do_check = true;
	}else{
		do_check = false;
	}
	if(select_all=='everything'){
		toggle_select_everything(do_check);
	}
	for (i = start; i <= end; i++){
		document.getElementById('checkbox_'+i).checked = do_check;
	}
}

function toggle_select_all(column){
	if(document.getElementById('select_all_'+column).checked==true){
		document.getElementById('select_all_'+column).checked = false;
		if(column=='everything'){
			toggle_select_everything(false);
		}
	}else{
		document.getElementById('select_all_'+column).checked = true;
		if(column=='everything'){
			toggle_select_everything(true);
		}
	}
}

function toggle_select_everything(do_check){	
	for (i = 0; i < 7; i++){
		document.getElementById('select_all_'+i).checked = do_check;
	}
}

</script>
<form action="" method="post" name="adminForm" enctype="multipart/form-data">
	<div class="width-100 fltlft">	
		<div class="clr"> </div><!-- needed for some admin templates -->				
		<fieldset class="adminform">	
			<legend class="amm_legend"><?php echo JText::_('COM_MENUS_SUBMENU_ITEMS').' '.$this->controller->amm_strtolower(JText::_('COM_ADMINMENUMANAGER_IMPORT')).' '.JText::_('COM_ADMINMENUMANAGER_IN').' '.$this->controller->amm_strtolower(JText::_('COM_ADMINMENUMANAGER_MENU')).' \''.htmlspecialchars($this->menu_name).'\''; ?></legend>	
			<?php
			if($this->controller->get_version_type()=='free'){
				echo '<p class="amm_red" style="padding-left: 10px; padding-top: 10px;">';
				echo JText::_('COM_ADMINMENUMANAGER_NOT_IN_FREE_VERSION');
				echo '</p>';
			}
			?>								
			<table class="adminlist tabletop amm_table">							
				<tr>
					<td class="amm_nowrap" style="width: 150px;">
						<?php
							echo JText::_('COM_ADMINMENUMANAGER_IMPORT').' '.$this->controller->amm_strtolower(JText::_('COM_INSTALLER_HEADING_TYPE'));
						?>											
					</td>
					<td class="amm_nowrap" style="width: 150px;">
						<label>
							<input type="radio" name="type" value="joomla" class="radio" id="type_joomla" checked="checked" onchange="change_type('joomla');" />
							Joomla <?php echo $this->controller->amm_strtolower(JText::_('MOD_MENU')); ?>
						</label>
						&nbsp;&nbsp;&nbsp; 
						<label>
							<input type="radio" name="type" value="file" class="radio" id="type_file" onchange="change_type('file');" />
							<?php echo $this->controller->amm_strtolower(JText::_('COM_INSTALLER_TYPE_TYPE_FILE')); ?>
						</label>
						&nbsp;&nbsp;&nbsp; 	
						<label>
							<input type="radio" name="type" value="textarea" class="radio" id="type_textarea" onchange="change_type('textarea');" />
							<?php echo JText::_('COM_ADMINMENUMANAGER_TEXTAREA'); ?>
						</label>					
					</td>
					<td>
																	
					</td>
				</tr>
											
			</table>
			<div id="div_joomla">
				<table class="adminlist tabletop amm_table">					
					<tr>
						<td class="amm_nowrap" style="width: 150px;">						
							<?php
								echo JText::_('JPUBLISHED');
							?>						
						</td>
						<td>						
							<label>
								<input type="radio" name="published" value="1" class="radio" checked="checked" />
								<?php echo JText::_('JYES'); ?>
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="published" value="0" class="radio" />
								<?php echo JText::_('JNO'); ?>
							</label>												
						</td>
						<td>										
						</td>
					</tr>
					<tr<?php if(!$this->controller->amm_config['access_enabled'] && !$this->helper->check_if_access_via_accessmanager()){echo ' style="display: none;"';} ?>>
						<td class="amm_nowrap">											
							<?php
								echo JText::_('JGRID_HEADING_ACCESS');
							?>											
						</td>
						<td colspan="2">						
							<select name="access">	
								<?php
								foreach($this->groups_levels as $group_level){							
									echo '<option value="'.$group_level->id.'">';
									if($this->controller->amm_config['based_on']=='group'){
										echo str_repeat('- ',$group_level->hyrarchy);
									}												
									echo $group_level->title;
									echo '</option>';								
								}
								?>						
							</select> 										
						</td>					
					</tr>
					<tr>
						<td class="amm_nowrap">						
							<?php
								echo JText::_('COM_MENUS_FIELD_VALUE_PARENT');
							?>						
						</td>
						<td>						
							<select name="parentid" id="select_parentid">	
								<?php
								echo '<option value="0">'.$this->controller->amm_strtolower(JText::_('JGLOBAL_ROOT')).'</option>';	
								foreach($this->menuitems as $menuitem){															
									echo '<option value="'.$menuitem->id.'">';
									$levels = $menuitem->level;
									for($n = 0; $n < $levels; $n++){
										echo '- ';
									}												
									echo $menuitem->title;
									echo '</option>';								
								}
								?>						
							</select> 						
						</td>
						<td>
							<?php echo JText::_('COM_ADMINMENUMANAGER_NO_ORPHANS'); ?>.				
						</td>
					</tr>
					<tr>
						<td colspan="3">							
							<table>	
								<tr class="select_all">
									<td class="check">										
										<input type="checkbox" value="1" name="select_alls_everything" id="select_all_everything" onchange="select_all_from_column('everything',1,<?php echo $this->array_last_items[6]; ?>);" />
									</td>
									<td colspan="6">												
										<a href="javascript:toggle_select_all('everything');select_all_from_column('everything',1,<?php echo $this->array_last_items[6]; ?>);" >
											<?php echo $this->controller->amm_strtolower(JText::_('JGLOBAL_SELECTION_ALL')).' Joomla '.$this->controller->amm_strtolower(JText::_('COM_ADMINMENUMANAGER_MENU')); ?>
										</a>
									</td>
								</tr>
								<tr class="select_all">
									<?php
										//$columns = 1;
										for($n = 0; $n < 7; $n++){											
											?>
											<td class="check">										
												<input type="checkbox" value="1" name="select_alls_<?php echo $n; ?>" id="select_all_<?php echo $n; ?>" onchange="select_all_from_column(<?php echo $n.','.$this->array_first_items[$n].','.$this->array_last_items[$n]; ?>);" />
											</td>
											<td>												
												<a href="javascript:toggle_select_all(<?php echo $n; ?>);select_all_from_column(<?php echo $n.','.$this->array_first_items[$n].','.$this->array_last_items[$n]; ?>);" >
													<?php echo $this->controller->amm_strtolower(JText::_('JGLOBAL_SELECTION_ALL')); ?>
												</a>
											</td>
											<?php
										}
									?>																
								</tr>						
								<tr>
									<td class="amm_quick_select_buttons" colspan="2">								
										<table <?php
										if($this->helper->joomla_version >= '3.0'){
											echo ' class="joomla3"';
										}
										?>>
										<?php	
										$columns = 1;									
										for($n = 1; $n <= count($this->joomla_menuitems); $n++){
										
											if($this->joomla_menuitems[$n][2]=='#' && $n!=1 && $columns<=6 && $n!=5){
												echo '</table></td>';
												echo '<td class="amm_quick_select_buttons" colspan="2"><table';
												if($this->helper->joomla_version >= '3.0'){
													echo ' class="joomla3"';
												}
												echo '>';
												$columns++;
											}
										?>											
											<tr>
												<td>
													<input type="checkbox" value="<?php echo $n; ?>" name="joomla_menuitems[]" id="checkbox_<?php echo $n; ?>" />
												</td>
												<td>
													<div class="margin_<?php echo $this->joomla_menuitems[$n][4]; ?>">
														<label for="checkbox_<?php echo $n; ?>">
															<?php
															if($this->joomla_menuitems[$n][5]=='2'){
																//type is line
																echo '<span class="line_import">';
																echo '<img src="components/com_adminmenumanager/images/line_import.gif" alt="line" />';
																echo '</span>';
															}else{
																//type is menuitem
																?>
																<a<?php
																if($this->joomla_menuitems[$n][1]){
																	echo ' style="background-image: url('.$this->joomla_menuitems[$n][1].');"';
																}
																?>>
																	<?php echo $this->joomla_menuitems[$n][0]; ?>
																</a>
																<?php
															}
															?>
														</label>
													</div>
												</td>
											</tr>
										<?php	
										}									
										?>
										</table>									
									</td>
								</tr>							
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div id="div_file">
				<table class="adminlist tabletop amm_table">
					<tr>
						<td style="width: 150px;">
						</td>
						<td colspan="2">						 
						  	 .csv <?php echo JText::_('COM_ADMINMENUMANAGER_OR'); ?> .txt <?php echo $this->controller->amm_strtolower(JText::_('COM_INSTALLER_TYPE_TYPE_FILE')); ?>
					  </td>
					</tr>
					<tr>
						<td style="width: 150px;">
						</td>
						<td>
							<input type="file" name="file_csv" id="file_csv" value="" />
						</td>
						<td>
						</td>
					</tr>
				</table>
			</div>	
				
			<div id="div_textarea">
				<table class="adminlist tabletop amm_table">					
					<tr>
						<td style="width: 150px;">
						</td>
						<td colspan="2">
						
						  <textarea name="textarea_csv" id="textarea_csv" style="width: 600px; height: 200px;"></textarea>	
						  <br />
						  <br />
						  csv <?php echo JText::_('COM_ADMINMENUMANAGER_FORMAT'); ?>:<br />
						&quot;id&quot;,&quot;title&quot;,&quot;icon&quot;,&quot;url&quot;,&quot;published&quot;,&quot;parentid&quot;,&quot;level&quot;,&quot;ordering&quot;,&quot;ordertotal&quot;,&quot;accessgroup&quot;,&quot;accesslevel&quot;,&quot;type&quot;,&quot;target&quot;,&quot;width&quot;,&quot;height&quot;,&quot;constant&quot;,&quot;use_constant&quot;<br />
						  &quot;135&quot;,&quot;Users&quot;,&quot;&quot;,&quot;#&quot;,&quot;1&quot;,&quot;0&quot;,&quot;1&quot;,&quot;1&quot;,&quot;1&quot;,&quot;6&quot;,&quot;0&quot;,&quot;0&quot;,&quot;0&quot;,&quot;800&quot;,&quot;600&quot;,&quot;&quot;,&quot;0&quot;<br />
						  &quot;136&quot;,&quot;User Manager&quot;,&quot;templates/bluestork/images/menu/icon-16-user.png&quot;,&quot;index.php?option=com_users&amp;view=users&quot;,&quot;1&quot;,&quot;135&quot;,&quot;2&quot;,&quot;1&quot;,&quot;2&quot;,&quot;6&quot;,&quot;0&quot;,&quot;0&quot;,&quot;0&quot;,&quot;800&quot;,&quot;600&quot;,&quot;MOD_MENU_COM_USERS_USER_MANAGER&quot;,&quot;0&quot;
						  					
					  </td>
					</tr>
				</table>
			</div>				
		</fieldset>
	</div>	
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="menu" value="<?php echo JRequest::getVar('menu', ''); ?>" />		
	<?php echo JHtml::_('form.token'); ?>
</form>
