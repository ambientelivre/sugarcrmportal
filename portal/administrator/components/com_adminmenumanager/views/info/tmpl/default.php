<?php
/**
* @package Admin-Menu-Manager (com_adminmenumanager)
* @version 2.2.1
* @copyright Copyright (C) 2012 - 2014 Carsten Engel. All rights reserved.
* @license GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html 
* @author http://www.pages-and-items.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<form class="adminForm" id="adminForm">
	<?php if (!empty($this->sidebar)): ?>
		<div id="j-sidebar-container" class="span2">
			<?php echo $this->sidebar; ?>
		</div>
	<?php endif; ?>	
	<div id="j-main-container"<?php echo empty($this->sidebar) ? '' : ' class="span10"'; ?>>
		<div class="clr"> </div><!-- needed for some admin templates -->
		<fieldset class="adminform fieldset_margin_bottom">	
			<legend class="amm_legend"><?php echo JText::_('COM_ADMINMENUMANAGER_SUPPORT_INFO'); ?></legend>		
			<table class="adminlist amm_table">	
				<tr>
					<td style="width: 10px;">
						1.
					</td>			
					<td>
						<a href="http://www.pages-and-items.com/extensions/admin-menu-manager/faqs" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_FAQS'); ?></a>
					</td>
					<td>
						<?php echo JText::_('COM_ADMINMENUMANAGER_FAQS_INFO'); ?>.
					</td>
				</tr>
				<tr>
					<td>
						2.
					</td>			
					<td>
						<a href="http://www.pages-and-items.com/forum/advsearch?catids=43" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_SEARCH_FORUM'); ?></a> 
					</td>
					<td>
						<?php echo JText::_('COM_ADMINMENUMANAGER_SEARCH_FORUM_INFO'); ?> 'Admin-Menu-Manager'.
					</td>
				</tr>
				<tr>
					<td>
						3.
					</td>			
					<td>
						<a href="http://www.pages-and-items.com/forum/43-admin-menu-manager" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_POST_FORUM'); ?></a>
					</td>
					<td>
						<?php echo JText::_('COM_ADMINMENUMANAGER_POST_FORUM_INFO'); ?> 'Admin-Menu-Manager'.
					</td>
				</tr>
				<tr>
					<td>
						4.
					</td>			
					<td>
						<a href="http://www.pages-and-items.com/contact" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_CONTACT'); ?></a>
					</td>
					<td>
						<?php echo JText::_('COM_ADMINMENUMANAGER_CONTACT_INFO'); ?>.
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset class="adminform fieldset_margin_bottom">	
			<legend class="amm_legend"><?php echo JText::_('COM_ADMINMENUMANAGER_UPDATE_NOTIFICATIONS'); ?></legend>
			<table class="adminlist amm_table">	
				<tr>
					<td style="width: 10px;">
						<img src="components/com_adminmenumanager/images/mail.png" alt="mail" />
					</td>
					<td>
						<a href="http://www.pages-and-items.com/my-account/email-update-notifications" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_EMAIL_UPDATE_NOTIFICATIONS'); ?></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="components/com_adminmenumanager/images/rss.png" alt="rss" />
					</td>
					<td>
						<a href="http://www.pages-and-items.com/extensions/admin-menu-manager/update-notifications-for-admin-menu-manager" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_RSS'); ?></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="components/com_adminmenumanager/images/twitter.png" alt="twitter" />
					</td>
					<td>
						<a href="http://twitter.com/PagesAndItems" target="_blank"><?php echo JText::_('COM_ADMINMENUMANAGER_TWITTER'); ?> Twitter</a>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset class="adminform fieldset_margin_bottom">	
			<legend class="amm_legend"><?php echo JText::_('JFIELD_LOGIN_REDIRECT_URL_LABEL'); ?></legend>	
			<p>
			<br />
			<?php echo JText::_('COM_ADMINMENUMANAGER_INFO_ROL').' '.JText::_('COM_INSTALLER_TYPE_TYPE_COMPONENT'); ?> <a href="http://www.pages-and-items.com/extensions/redirect-on-login" target="_blank">Redirect-on-Login</a>.
			</p>
		</fieldset>		
		<fieldset class="adminform fieldset_margin_bottom">	
			<legend class="amm_legend"><?php echo JText::_('COM_ADMINMENUMANAGER_REVIEW'); ?></legend>	
		
			<p>
			<br />
			<?php 
			echo JText::_('COM_ADMINMENUMANAGER_REVIEW_B'); 
			if($this->controller->get_version_type()=='pro'){
				$url_jed = '22805';
			}else{
				$url_jed = '21305';
			}		
			?>
			<a href="http://extensions.joomla.org/extensions/administration/admin-navigation/<?php echo $url_jed; ?>" target="_blank">
				Joomla! Extensions Directory</a>.
			</p>
		</fieldset>
	</div>
</form>