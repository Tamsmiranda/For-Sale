<?php
/**
 * @version     1.0.0
 * @package     com_forsales
 * @copyright   Copyright (C) 2011 Amy Stephen. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/** uncomment out to determine values available */
//echo '<pre>';var_dump($this->state);'</pre>';
//echo '<pre>';var_dump($this->params);'</pre>';
//echo '<pre>';var_dump($this->pagination);'</pre>';
//echo '<pre>';var_dump($this->user);'</pre>';

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

// Url do TimThumb
$base = juri::base();
$timthumb = $base . JRoute::_('components/com_forsales/libraries/timthumb/timthumb.php', false);
$imgDir = $base . JRoute::_('components/com_forsales/images/', true);


?>
<div class="list<?php echo $this->pageclass_sfx;?>">
<?php if (empty($this->items)) : ?>
	<div class="span-14">
		<h3>Resultado da Busca</h3>
		<p>Não foram encontrados imóveis correspondentes a sua pesquisa.</p>
	</div>
<?php else : ?>
<?php 

$odd = false;
foreach ($this->items as $item) :

    /** uncomment out to determine column names */
    //echo '<pre>';var_dump($item);'</pre>';

    /** load custom fields for item into an array */
    $custom_fields = json_decode($item->custom_fields);

    /** uncomment out to display the names and values of all custom_fields  */
    //foreach ($custom_fields as $name=>$value) {
    //    echo '<br/>'.$name.' '.$value.'<br />';
    //};
    ?>

		<div class="span-7">
			<!-- -->
			<div id="forsaleitem" style="background-image:url('components/com_forsales/images/overlay-240x130.png');height: 149px;width: 275px;">
				<a href="<?php echo JRoute::_( 'index.php?option=com_forsales&view=forsale&id='.$item->id );?>">
					<img style="padding: 3px 0 0 17px;" src="<?php echo $timthumb."?src=".$base.$custom_fields->image1."&w=240&h=130&zc=1";?>" alt="" />
				</a>
			</div>
			<!-- -->
			<h3 class="forsaletitle">
				<a href="<?php echo JRoute::_( 'index.php?option=com_forsales&view=forsale&id='.$item->id );?>">
					<?php echo $this->escape($item->title); ?>
				</a>
			</h3>

			<?php if ($item->subtitle == '') :
			else : ?>
			<h4>
				<?php echo $this->escape($item->subtitle); ?>
			</h4>
			<?php endif; ?>
			<div class="description">
				<?php echo $item->snippet; ?>
			</div>
		</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
	<div id="pagination" class="span-14">
	<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
