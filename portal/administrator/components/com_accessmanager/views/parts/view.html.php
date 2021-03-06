<?php
/**
* @package Access-Manager (com_accessmanager)
* @version 2.2.1
* @copyright Copyright (C) 2012 - 2014 Carsten Engel. All rights reserved.
* @license GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html 
* @author http://www.pages-and-items.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class accessmanagerViewParts extends JViewLegacy{
	
	protected $items;
	protected $pagination;
	protected $state;
	
	function display($tpl = null){
	
		$controller = new accessmanagerController();	
		$this->assignRef('controller', $controller);	
		
		$helper = new accessmanagerHelper();
		$this->assignRef('helper', $helper);
	
		$this->state = $this->get('State');
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		
		//toolbar			
		JToolBarHelper::apply('access_parts_apply');
		JToolBarHelper::save('access_parts_save');
		JToolBarHelper::divider();
		JToolBarHelper::custom('part','new.png','new_f2.png',JText::_('JTOOLBAR_NEW'),false,false);		
		JToolBarHelper::custom('part_delete','delete.png','delete_f2.png',JText::_('JTOOLBAR_DELETE'),false,false);			
		JToolBarHelper::divider();		
		JToolBarHelper::custom('back', 'back.png', 'back.png', JText::_('JTOOLBAR_BACK'), false, false );	
		
		//sidebar
		if($this->helper->joomla_version >= '3.0'){			
			$this->add_sidebar($helper);	
		}		
		
		//get usergroups from db
		$am_grouplevels = $controller->get_grouplevels(0, 1, 0, 1);
		$this->assignRef('am_grouplevels', $am_grouplevels);
				
		//get access from db
		$helper = new accessmanagerHelper();
		$access_parts = $helper->get_access_rights('part', $this->controller->am_config['based_on']);	
		$this->assignRef('access_parts', $access_parts);
		
		//set header		
		JToolBarHelper::title('Access Manager :: '.JText::_('COM_ACCESSMANAGER_PART_ACCESS'), 'am_icon');	
		
		parent::display($tpl);
	}
	
	function add_sidebar($helper){
	
		JHtmlSidebar::setAction('index.php?option=com_accessmanager&view=parts');	
				
		$helper->add_submenu();			
		
		$this->sidebar = JHtmlSidebar::render();
	}
	
}
?>