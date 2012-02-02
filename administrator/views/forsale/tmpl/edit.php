<?php
/**
 * @version     1.0.0
 * @package     com_forsales
 * @copyright   Copyright (C) 2011 Amy Stephen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/** custom css **/
$document = JFactory::getDocument();
$document->addStyleSheet('../media/com_forsales/css/administrator.css');

// Load the tooltip behavior.
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
?>

<script type="text/javascript">
	Joomla.submitbutton = function(task) {
		if (task == 'forsale.cancel' || document.formvalidator.isValid(document.id('item-form'))) {
			<?php echo $this->form->getField('fulltext')->save(); ?>
			Joomla.submitform(task, document.getElementById('item-form'));
		} else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_forsales&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="item-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo empty($this->item->id) ? JText::_('COM_FORSALES_NEW_FORSALE') : JText::sprintf('COM_FORSALES_EDIT_FORSALE', $this->item->id); ?></legend>
			<ul class="adminformlist">
				<li><?php echo $this->form->getLabel('title'); ?>
				<?php echo $this->form->getInput('title'); ?></li>

				<li><?php echo $this->form->getLabel('subtitle'); ?>
				<?php echo $this->form->getInput('subtitle'); ?></li>
			</ul>

			<div class="clr"></div>
			<?php echo $this->form->getLabel('snippet'); ?>
			<div class="clr"></div>
			<?php echo $this->form->getInput('snippet'); ?>

			<div class="clr"></div>
			<?php echo $this->form->getLabel('fulltext'); ?>
			<div class="clr"></div>
			<?php echo $this->form->getInput('fulltext'); ?>
			<div class="clr"></div>
			<ul class="adminformlist">
				<li><?php echo $this->form->getLabel('price'); ?>
				<?php echo $this->form->getInput('price'); ?></li>

				<li><?php echo $this->form->getLabel('bedrooms'); ?>
				<?php echo $this->form->getInput('bedrooms'); ?></li>
				
				<li><?php echo $this->form->getLabel('bathrooms'); ?>
				<?php echo $this->form->getInput('bathrooms'); ?></li>
				
				<li><?php echo $this->form->getLabel('garages'); ?>
				<?php echo $this->form->getInput('garages'); ?></li>
				
				<li><?php echo $this->form->getLabel('square_footage'); ?>
				<?php echo $this->form->getInput('square_footage'); ?></li>
				
				<li><?php echo $this->form->getLabel('use_google_maps'); ?>
				<?php echo $this->form->getInput('use_google_maps'); ?></li>
				
				<li><?php echo $this->form->getLabel('address'); ?>
				<?php echo $this->form->getInput('address'); ?></li>
				
				<li><?php echo $this->form->getLabel('is_featured'); ?>
				<?php echo $this->form->getInput('is_featured'); ?></li>
			</ul>
		</fieldset>
	</div>

	<div class="width-40 fltrt">
		<?php echo JHtml::_('sliders.start','content-sliders-'.$this->item->id, array('useCookie'=>1)); ?>

			<?php echo $this->loadTemplate('publishing'); ?>

			<?php echo $this->loadTemplate('custom_fields'); ?>

			<?php echo $this->loadTemplate('parameters'); ?>

			<?php echo $this->loadTemplate('metadata'); ?>

		<?php echo JHtml::_('sliders.end'); ?>
        </div>
    
<div class="clr"></div>
<?php if ($this->canDo->get('core.admin')): ?>
    <div class="width-100 fltlft">
        <?php echo JHtml::_('sliders.start','permissions-sliders-'.$this->item->id, array('useCookie'=>1)); ?>

            <?php echo JHtml::_('sliders.panel',JText::_('COM_FORSALES_FIELDSET_RULES'), 'access-rules'); ?>
            <fieldset class="panelform">
                <?php echo $this->form->getLabel('rules'); ?>
                <?php echo $this->form->getInput('rules'); ?>
            </fieldset>

        <?php echo JHtml::_('sliders.end'); ?>
    </div>
<?php endif; ?>
<div>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="return" value="<?php echo JRequest::getCmd('return');?>" />
    <?php echo JHtml::_('form.token'); ?>
</div>
</form>
