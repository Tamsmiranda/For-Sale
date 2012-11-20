<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  COM_FORSALES
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Weblinks helper.
 *
 * @package     Joomla.Administrator
 * @subpackage  COM_FORSALES
 * @since       1.6
 */
class ForsalesHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	The name of the active view.
	 * @since	1.6
	 */
	public static function addSubmenu($vName = 'forsales')
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_FORSALES_SUBMENU_FORSALES'),
			'index.php?option=com_forsales&view=forsales',
			$vName == 'forsales'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_FORSALES_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&extension=com_forsales',
			$vName == 'categories'
		);
		if ($vName == 'categories')
		{
			JToolbarHelper::title(
				JText::sprintf('COM_CATEGORIES_CATEGORIES_TITLE', JText::_('com_forsales')),
				'forsales-categories');
		}
	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @param	int		The category ID.
	 * @return	JObject
	 * @since	1.6
	 */
	public static function getActions($categoryId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		if (empty($categoryId)) {
			$assetName = 'com_forsales';
			$level = 'component';
		} else {
			$assetName = 'com_forsales.category.'.(int) $categoryId;
			$level = 'category';
		}

		$actions = JAccess::getActions('com_forsales', $level);

		foreach ($actions as $action) {
			$result->set($action->name,	$user->authorise($action->name, $assetName));
		}

		return $result;
	}
}
