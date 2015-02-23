<?php
/**
* @package Frontend-User-Access (com_frontenduseraccess)
* @version 4.1.11
* @copyright Copyright (C) 2008-2014 Carsten Engel. All rights reserved.
* @license GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html 
* @author http://www.pages-and-items.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

//header
$this->controller->echo_header();

?>
<form class="adminForm">
<p style="margin-left: 4px;">
	<h3><?php echo JText::_('COM_FRONTENDUSERACCESS_SUPPORT_INFO'); ?>:</h3>
</p>
<table class="adminlist fua_table">	
	<tr>
		<td style="width: 10px;">
			1.
		</td>			
		<td>
			<a href="http://www.pages-and-items.com/extensions/frontend-user-access/faqs" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_FAQS'); ?></a>
		</td>
		<td>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_FAQS_INFO'); ?>.
		</td>
	</tr>
	<tr>
		<td>
			2.
		</td>			
		<td>
			<a href="http://www.pages-and-items.com/forum/advsearch?catids=37" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_SEARCH_FORUM'); ?></a> 
		</td>
		<td>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_SEARCH_FORUM_INFO'); ?> 'Frontend-User-Access Joomla'.
		</td>
	</tr>
	<tr>
		<td>
			3.
		</td>			
		<td>
			<a href="http://www.pages-and-items.com/forum/37-frontend-user-access" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_POST_FORUM'); ?></a>
		</td>
		<td>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_POST_FORUM_INFO'); ?> 'Frontend-User-Access Joomla'.
		</td>
	</tr>
	<tr>
		<td>
			4.
		</td>			
		<td>
			<a href="http://www.pages-and-items.com/contact" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_CONTACT'); ?></a>
		</td>
		<td>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_CONTACT_INFO'); ?>.
		</td>
	</tr>
</table>
<br /><br />
<p style="margin-left: 4px;">
	<h3><?php echo JText::_('COM_FRONTENDUSERACCESS_REVIEW'); ?></h3>	
	<?php 
	echo JText::_('COM_FRONTENDUSERACCESS_REVIEW_B'); 
	if($this->controller->fua_version_type=='pro'){
		$url_jed = '6874';
	}else{
		$url_jed = '9041';
	}	
	echo ' <a href="http://extensions.joomla.org/extensions/access-a-security/site-access/frontend-access-control/'.$url_jed.'" target="_blank">';
	echo 'Joomla! Extensions Directory</a>.';
	?>
</p>
<br /><br />
<p style="margin-left: 4px;">
	<h3><?php echo JText::_('COM_FRONTENDUSERACCESS_UPDATE_NOTIFICATIONS'); ?>:</h3>
</p>
<table class="adminlist fua_table">	
	<tr>
		<td style="width: 10px;">
			<img src="components/com_frontenduseraccess/images/mail.png" alt="mail" />
		</td>
		<td>
			<a href="http://www.pages-and-items.com/my-account/email-update-notifications" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_EMAIL_UPDATE_NOTIFICATIONS'); ?></a>
		</td>
	</tr>
	<tr>
		<td>
			<img src="components/com_frontenduseraccess/images/rss.png" alt="rss" />
		</td>
		<td>
			<a href="http://www.pages-and-items.com/extensions/frontend-user-access/update-notifications-for-frontend-user-access" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_RSS'); ?></a>
		</td>
	</tr>
	<tr>
		<td>
			<img src="components/com_frontenduseraccess/images/twitter.png" alt="twitter" />
		</td>
		<td>
			<a href="http://twitter.com/PagesAndItems" target="_blank"><?php echo JText::_('COM_FRONTENDUSERACCESS_TWITTER'); ?> Twitter</a>
		</td>
	</tr>
</table>	
<br /><br />
<p style="margin-left: 4px;">
	<h3><?php echo JText::_('COM_FRONTENDUSERACCESS_NOT_FOR_JOOMLA_THREE'); ?>  <a href="http://www.pages-and-items.com/extensions/access-manager" target="_blank">Access-Manager</a>.</h3>	
	<?php echo JText::_('COM_FRONTENDUSERACCESS_DIFFERENCES'); ?> Access-Manager:
	<ul>
		<li>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_PER_JOOMLA_GROUP'); ?>
		</li>
		<li>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_OVERRIDES_JOOMLA_ACCESS'); ?>
		</li>
		<li>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_JOOMLA_THREE'); ?>
		</li>
		<li>
			<?php echo JText::_('COM_FRONTENDUSERACCESS_MORE_BETTER'); ?>
		</li>
	</ul>
</p>
<br /><br />
<p style="margin-left: 4px;">
	<h3>Subscriptions and paid content:</h3>	
	To offer paid content or subscriptions, you can connect the usergroups to subscription-plans/products in these e-commerce extensions:
		<ul>
			<li>
				<a href="https://www.akeebabackup.com/products/akeeba-subscriptions.html" target="_blank">Akeeba Subscriptions</a> (recommended) 							
			</li>
			<li>
				<a href="http://extensions.joomla.org/extensions/e-commerce/subscriptions/10723" target="_blank">AEC</a> 							
			</li>
			<li>
				<a href="http://extensions.joomla.org/extensions/e-commerce/paid-membership-a-subscriptions/16566" target="_blank">Payplans</a> (not recommended)
			</li>
			<li>
				<a href="http://extensions.joomla.org/extensions/e-commerce/shopping-cart/11340" target="_blank">Tienda</a>
			</li>
		</ul>	
		<a href="http://www.pages-and-items.com/extensions/frontend-user-access/subscriptions-and-paid-content" target="_blank">read more</a>	
</p>
</form>
<?php
$this->controller->display_footer();
?>