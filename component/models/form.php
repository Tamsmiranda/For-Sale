<?php
/**
 * @version     1.0.0
 * @package     com_forsales
 * @copyright   Copyright (C) 2011 Amy Stephen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Base this model on the backend version.
require_once JPATH_ADMINISTRATOR.'/components/com_forsales/models/forsale.php';

/**
 * Forsales Component Forsale Model
 *
 * @package		Joomla.Site
 * @subpackage	com_forsales
 * @since 1.5
 */
class ForsalesModelForm extends ForsalesModelForsale
{
	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @since	1.6
	 */
	protected function populateState()
	{
		$app = JFactory::getApplication();

		// Load state from the request.
		$pk = JRequest::getInt('id');
		$this->setState('forsale.id', $pk);

		$this->setState('forsale.catid', JRequest::getInt('catid'));

		$return = JRequest::getVar('return', null, 'default', 'base64');
		$this->setState('return_page', base64_decode($return));

		// Load the parameters.
		$params	= $app->getParams();
		$this->setState('params', $params);

		$this->setState('layout', JRequest::getCmd('layout'));
	}

	/**
	 * Method to get forsale data.
	 *
	 * @param	integer	The id of the forsale.
	 *
	 * @return	mixed	Forsales item data object on success, false on failure.
	 */
	public function getItem($itemId = null)
	{
		// Initialise variables.
		$itemId = (int) (!empty($itemId)) ? $itemId : $this->getState('forsale.id');

		// Get a row instance.
		$table = $this->getTable();

		// Attempt to load the row.
		$return = $table->load($itemId);

		// Check for a table object error.
		if ($return === false && $table->getError()) {
			$this->setError($table->getError());
			return false;
		}

		$properties = $table->getProperties(1);
		$value = JArrayHelper::toObject($properties, 'JObject');

		// Convert attrib field to Registry.
		$value->parameters = new JRegistry;
		$value->parameters->loadString($value->parameters);

		// Compute selected asset permissions.
		$user	= JFactory::getUser();
		$userId	= $user->get('id');
		$asset	= 'com_forsales.forsale.'.$value->id;

		// Check general edit permission first.
		if ($user->authorise('core.edit', $asset)) {
			$value->parameters->set('access-edit', true);
		}
		// Now check if edit.own is available.
		else if (!empty($userId) && $user->authorise('core.edit.own', $asset)) {
			// Check for a valid user and that they are the owner.
			if ($userId == $value->created_by) {
				$value->parameters->set('access-edit', true);
			}
		}

		// Check edit state permission.
		if ($itemId) {
			// Existing item
			$value->parameters->set('access-change', $user->authorise('core.edit.state', $asset));
		} else {
			// New item.
			$catId = (int) $this->getState('forsale.catid');
			if ($catId) {
				$value->parameters->set('access-change', $user->authorise('core.edit.state', 'com_forsales.category.'.$catId));
			}
			else {
				$value->parameters->set('access-change', $user->authorise('core.edit.state', 'com_forsales'));
			}
		}

//		$value->forsaletext = $value->introtext;
//		if (!empty($value->fulltext)) {
//			$value->forsaletext .= '<hr id="system-readmore" />'.$value->fulltext;
//		}
		return $value;
	}

	/**
	 * Get the return URL.
	 *
	 * @return	string	The return URL.
	 * @since	1.6
	 */
	public function getReturnPage()
	{
		return base64_encode($this->getState('return_page'));
	}
}