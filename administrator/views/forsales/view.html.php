<?php
/**
 * @version     1.0.0
 * @package     com_forsales
 * @copyright   Copyright (C) 2011 Amy Stephen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for a list of forsales.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_forsales
 */
class ForsalesViewForsales extends JView
{
	protected $items;
	protected $pagination;
	protected $state;

	/**
	 * Display the view
	 */
	public function display($tpl = null)
	{
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		$this->state		= $this->get('State');
		$this->authors		= $this->get('Authors');

		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		if ($this->getLayout() !== 'modal') {
			$this->addToolbar();
		}

		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 */
	protected function addToolbar()
	{
		$canDo	= ForsalesHelper::getActions($this->state->get('filter.category_id'));
		$user	= JFactory::getUser();
		JToolBarHelper::title(JText::_('COM_FORSALES_FORSALES_TITLE'), 'forsale.png');

		if ($canDo->get('core.create')
            || (count($user->getAuthorisedCategories('com_forsales', 'core.create'))) > 0 ) {
			JToolBarHelper::addNew('forsale.add');
		}

		if (($canDo->get('core.edit'))
            || ($canDo->get('core.edit.own'))) {
			JToolBarHelper::editList('forsale.edit');
		}

		if ($canDo->get('core.edit.state')) {
			JToolBarHelper::divider();
			JToolBarHelper::publish('forsales.publish', 'JTOOLBAR_PUBLISH', true);
			JToolBarHelper::unpublish('forsales.unpublish', 'JTOOLBAR_UNPUBLISH', true);
			JToolBarHelper::divider();
			JToolBarHelper::checkin('forsales.checkin');
		}

		if ($this->state->get('filter.published') == -2
            && $canDo->get('core.delete')) {
			JToolBarHelper::deleteList('', 'forsales.delete','JTOOLBAR_EMPTY_TRASH');
			JToolBarHelper::divider();

		} else if ($canDo->get('core.edit.state')) {
			JToolBarHelper::trash('forsales.trash');
			JToolBarHelper::divider();
		}

		if ($canDo->get('core.admin')) {
			JToolBarHelper::preferences('com_forsales');
			JToolBarHelper::divider();
		}
	}
}
