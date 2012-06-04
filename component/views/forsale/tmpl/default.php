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
//echo '<pre>';var_dump($this->user);'</pre>';

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers');

$custom_fields = json_decode($this->item->custom_fields);

/** uncomment out to determine column names */
//echo '<pre>';var_dump($this->item);'</pre>';

/** uncomment out to display the names and values of all custom_fields  */
//foreach ($custom_fields as $name=>$value) {
//    echo '<br/>'.$name.' '.$value.'<br />';
//};

/** uncomment out to display a specific custom field */
//echo $custom_fields->image1;
?>

<div class="list<?php echo $this->pageclass_sfx;?>">
	<a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image002.jpg" rel="prettyPhoto" title="This is the description"><img src="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image002.jpg" width="60" height="60" alt="This is the title" /></a>
	<div id="product-slider">
      <div id="product-slides">
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image002.jpg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image002.jpg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image008.jpg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image008.jpg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-1.jpeg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-1.jpeg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown.jpeg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown.jpeg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-2.jpeg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-2.jpeg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-2.jpeg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-2.jpeg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-3.jpeg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-3.jpeg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
                     <div class="item-slide">
               <a href="http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-4.jpeg" rel="prettyPhoto[gallery]" title="360 º On The Park">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-4.jpeg&amp;w=293&amp;h=293&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
            </div> <!-- .item-slide -->
               </div> <!-- #product-slides -->
         </div> <!-- #product-slider -->
		 <!-- Product descrption -->
		 <div class="product-info">
				<h3>
					<?php echo $this->escape($this->item->title); ?>
				</h3>
				<?php if ($this->item->subtitle == '') :
				else : ?>
				<h2>
					<?php echo $this->escape($this->item->subtitle); ?>
				</h2>
				<?php endif; ?>
			   <div class="product-types clearfix">
											 </div> <!-- .product-types -->
			   <div class="description">
					<?php echo $this->escape($this->item->snippet); ?>
			   </div> <!-- .description -->
		</div>
		    <div id="product-thumbs" class="clearfix">
      <div id="product-thumb-items">
         <div id="smallthumbs">
                           <a href="#" class="small-controller active" rel="1">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image002.jpg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                           <a href="#" class="small-controller" rel="2">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/image008.jpg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                           <a href="#" class="small-controller" rel="3">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-1.jpeg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                           <a href="#" class="small-controller" rel="5">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-2.jpeg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                           <a href="#" class="small-controller" rel="6">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-2.jpeg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                           <a href="#" class="small-controller" rel="7">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-3.jpeg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                           <a href="#" class="small-controller last" rel="8">
                  <img src="http://www.ceciliaimoveis.com.br/wp/wp-content/themes/teste/timthumb.php?src=http://www.ceciliaimoveis.com.br/wp/wp-content/uploads/Unknown-4.jpeg&amp;w=49&amp;h=49&amp;zc=1" alt="" />
                  <span class="overlay"></span>
               </a>
                     </div>
         <a href="#" id="left-arrow">Anterior</a>
         <a href="#" id="right-arrow">Próximo</a>
      </div> <!-- #product-thumb-items -->
   </div> <!-- #product-thumbs -->
    <!--<span>
        <img src="<?php //echo $custom_fields->image1; ?>">
    </span>-->
	<div class="full-text">
		<?php echo $this->item->fulltext; ?>
	</div>
	<?php if($this->item->use_google_maps) : ?>
	   <div id="gmaps-border">
		  <div id="gmaps-container" class="span-7" style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden;height:400px;width:534px;"></div>
	   </div>
	<?php endif;?>
	   <!-- end #gmaps-border -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3.1&sensor=true"></script>
   <script type="text/javascript">
      //<![CDATA[
      var map;
      var geocoder;

      initialize();

      function initialize() {
         geocoder = new google.maps.Geocoder();
         geocoder.geocode({
            'address': '<?php echo $this->escape($this->item->address); ?>',
            'partialmatch': true}, geocodeResult);   
      }

      function geocodeResult(results, status) {
         
         if (status == 'OK' && results.length > 0) {         
            var latlng = new google.maps.LatLng(results[0].geometry.location.b,results[0].geometry.location.c);
			var myOptions = {
			   zoom: 15,
			   center: results[0].geometry.location,
			   mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			
			map = new google.maps.Map(document.getElementById("gmaps-container"), myOptions);
			   var marker = new google.maps.Marker({
			   position: results[0].geometry.location,
			   map: map,
			   title:"<?php echo $this->escape($this->item->title); ?>"
			});

            var contentString = '<div id="content">'+
            '<h3 id="firstHeading" class="firstHeading" style="padding-bottom: 15px;">'+marker.title+'</h3>'+
            '<div id="bodyContent">'+
            '<p><a target="_blank" href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q='+escape(results[0].formatted_address)+'&amp;ie=UTF8&amp;view=map">'+results[0].formatted_address+'</a>'+
            '</p>'+
            '</div>'+
            '</div>';
            //&amp;sll=29.67226,-94.873971

            var infowindow = new google.maps.InfoWindow({
               content: contentString,
               maxWidth: 300
            });

            google.maps.event.addListener(marker, 'click', function() {
               infowindow.open(map,marker);
            });

            google.maps.event.trigger(marker, "click");

         } else {
            //alert("Geocode was not successful for the following reason: " + status);
         }
      }
      //]]>
	  <!-- single page slider -->
							
		if (jQuery('#product-slides').length) {
			jQuery('#product-slides').cycle({
				fx: 'fade',
				timeout: 0,
				speed: 700,
				cleartypeNoBg: true
			});
			
			$featured_slides = jQuery('#product-slides'),
			$controllers = jQuery('#smallthumbs'),
			controller_item = ('a.small-controller'),
			right_arrow = 'a#right-arrow',
			left_arrow = 'a#left-arrow',
			movearrow = false;
		};
		
		function move_arrow(activeObject){
			var arrowPosition = activeObject.position().left + 18;
			jQuery('span#active-arrow').animate({left: arrowPosition}, 400);
		}
		
		$controllers.find(controller_item).click(function(){
			
			$controllers.find('a.active').removeClass('active');
			
			jQuery(this).addClass('active');
			
			if (movearrow) move_arrow(jQuery(this));
			
			var ordernum = jQuery(this).prevAll(controller_item).length;
			
			$featured_slides.cycle(ordernum);
			
			if (typeof interval != 'undefined') {
				clearInterval(interval);
				auto_rotate();
			};
			
			return false;
		})
		
		// Slider
		jQuery(right_arrow + ',' + left_arrow).click(function(){
					
			if ( jQuery(this).attr('id') === 'right-arrow' )
				var ordernum = $controllers.find('a.active').prevAll(controller_item).length + 1;
			else
				var ordernum = $controllers.find('a.active').prevAll(controller_item).length - 1;
			
			$controllers.find('a.active').removeClass('active');
			
			if ( !$controllers.find(controller_item+':eq('+ ordernum +')').length ) {
				if ( jQuery(this).attr('id') === 'right-arrow' )
					ordernum = 0;
				else 
					ordernum = $controllers.find(controller_item).length-1;
			}
			
			$controllers.find(controller_item+':eq('+ ordernum +')').addClass('active');
			
			if (movearrow) move_arrow($controllers.find('a.active'));
			
			$featured_slides.cycle(ordernum);
			
			if (typeof interval != 'undefined') {
				clearInterval(interval);
				auto_rotate();
			};
			
			return false;
		});
		
					if (movearrow) {
				function auto_rotate(){
					interval = setInterval(function() {
						jQuery(right_arrow).click();
					}, 5000);
				}
				
				auto_rotate();
			}
				
	//]]>	
   </script>
    <?php //echo $this->item->text; ?>
	<pre><?php //print_r($this->item);?></pre>
	<pre><?php //print_r($this->item->custom_fields);?></pre>
	<pre><?php //echo $this->params->get('image1');?></pre>

</div>