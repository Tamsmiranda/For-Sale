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
<style type="text/css">
.gallery {
	margin: 0 0 20px;
	width: 964px;
	position: relative;
	overflow: hidden;
}
.gallery .holder {
	width: 100%;
	position: relative;
	overflow: hidden;
	z-index: 2;
}
.gallery .holder ul {
	margin: 0;
	padding: 0;
	list-style: none;
	width: 30000px;
}
.gallery .holder ul li {
	float: left;
	width: 240px;
	padding: 0 1px 1px 0;
}
.gallery .holder ul li img { display: block; }
/* vertical mode */
.gallery-vert { width: 240px; }
.gallery-vert .holder { height: 362px; }
.gallery-vert .holder ul { width: auto; }
.gallery-vert .holder ul li { float: none; }
.gallery-vert .holder ul li img {
	vertical-align: top;
	display: inline;
}
/* one item */
.gallery-one,
.gallery-vert-one { width: 240px; }
.gallery-vert-one .holder { height: 180px; }
.gallery-vert-one .holder ul { width: auto; }
.gallery-vert-one .holder ul li { float: none; }
.gallery-vert-one .holder ul li img {
	vertical-align: top;
	display: inline;
}
/* fade */
.gallery-fade { width: 240px; }
.gallery-fade .holder ul {
	width: 100%;
	height: 180px;
}
.gallery-fade .holder ul li {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 180px;
	padding: 0;
}
/* gallery6 */
.gallery6 { width: 740px; }
.gallery6 .thumbs {
	margin: 0;
	padding: 0;
	list-style: none;
	float: left;
	width: 120px;
}
.gallery6 ul.thumbs {
	margin: 0 !important; 
	padding: 0 !important;
}
.gallery6 .thumbs li {
	padding: 0 0 1px;
	list-style: none outside none;
	padding: 0;
}
.gallery6 .thumbs li a {
	position: relative;
	overflow: hidden;
	display: block;
	width: 100%;
}
.gallery6 .thumbs li span {
	position: absolute;
	top: 0;
	left: 0;
	background: url(../images/fader.png);
	width: 100%;
	height: 90px;
	text-indent: -9999px;
	cursor: pointer;
}
.gallery6 .thumbs li .active span,
.gallery6 .thumbs li a:hover span { background: none; }
.gallery6 .thumbs img { vertical-align: top; }
.gallery6 .holder {
	float: left;
	width: 440px;
	margin: 0 10px;
	display: inline;
}
.gallery6 .holder ul {
	width: 100%;
	height: 360px;
}
.gallery6 .holder ul li { height: 360px; }
.gallery6 .control {
	position: absolute;
	top: -40px;
	left: 0;
	background-color: #fff;
	padding: 5px;
	width: 70px;
}
.gallery6 .prev { left: -50px; }
.gallery6 .next { right: -50px; }
.gallery6 .title {
	position: absolute;
	bottom: 0;
	left: 0;
	background-color: #000;
	color: #fff;
	padding: 10px;
	width: 460px;
}
.paging {
	position: absolute;
	top: 0;
	left: 0;
	margin: 0;
	padding: 0;
	z-index: 100;
}
.paging ul {
	margin: 0;
	padding: 0;
}
.paging li {
	padding: 0 10px 0 0;
	float: left;
	list-style: none;
}
.paging li a {
	width: 14px;
	height: 14px;
	display: block;
	background-color: red;
	text-align: center;
	text-decoration: none;
	color: #fff;
}
.paging li a.active {
	background-color: yellow;
	color: red;
}
.next,
.prev {
	position: absolute;
	right: 10px;
	top: 50%;
	margin-top: -30px;
	width: 40px;
	height: 40px;
	background: url(../images/btn-next.png) no-repeat;
	z-index: 20;
	overflow: hidden;
	text-indent: -9999px;
	outline: none;
	cursor: pointer;
}
.next-disable { background: url(../images/btn-next-disable.png) no-repeat; }
.prev {
	background: url(../images/btn-prev.png) no-repeat;
	right: auto;
	left: 10px;
}
.prev-disable { background: url(../images/btn-prev-disable.png) no-repeat; }
.stop,
.start {
	background: url(../images/btn-pause.png) no-repeat;
	overflow: hidden;
	text-indent: -9999px;
	width: 30px;
	height: 30px;
	float: left;
	margin: 0 0 0 10px;
	outline: none;
	cursor: pointer;
}
.stopped .start { background: url(../images/btn-play.png) no-repeat; }
.start,
.no-active .start {
	margin: 0;
	background: url(../images/btn-play-disable.png) no-repeat;
}
.stopped .stop { background: url(../images/btn-pause-disable.png) no-repeat; }
.control {
	font-size: 18px;
	line-height: 21px;
	padding: 5px 0 0;
}
.nav {
	position: fixed;
	top: 150px;
	left: 0;
	padding-left: 10px;
	z-index: 100;
	border-right: 1px solid #ddd;
	width: 115px;
	background: #f4f5f5;
}
.nav strong {
	font-size: 14px;
	line-height: 17px;
	color: #686c70;
}
.nav ul {
	margin: 0;
	padding: 14px 0 0;
	list-style: none;
}
.nav ul li { padding: 0 0 5px; }
#footer {
	text-align: center;
	background: #f9f9f9;
	border-top: 1px solid #ddd;
	width: 100%;
}
#footer .hold {
	padding: 15px 0;
	width: 974px;
	margin: 0 auto;
}
#footer p {
	margin: 0;
	color: #888;
	font-size: 11px;
	line-height: 14px;
}
</style>

<div class="list<?php echo $this->pageclass_sfx;?>">

    <h1>
        <?php echo $this->escape($this->item->title); ?>
    </h1>

    <?php if ($this->item->subtitle == '') :
    else : ?>
    <h2>
        <?php echo $this->escape($this->item->subtitle); ?>
    </h2>
    <?php endif; ?>

    <p>
        <?php JHtml::_('date', $this->item->created, JText::_('DATE_FORMAT_LC2')); ?>
    </p>

<div class="gallery gallery6 gallery-fade">
			<ul class="thumbs">
				<?php if ($custom_fields->image1): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image1;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
				<?php if ($custom_fields->image2): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image2;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
				<?php if ($custom_fields->image3): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image3;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
				<?php if ($custom_fields->image4): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image4;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
			</ul>
			<div class="holder">
				<ul>
					<?php if ($custom_fields->image1): ?>
					<li style="visibility: visible; opacity: 1;">
						<img src="<?php echo $custom_fields->image1; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image2): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image2; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image3): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image3; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image4): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image4; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image5): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image5; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image6): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image6; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image7): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image7; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
					<?php if ($custom_fields->image8): ?>
					<li style="visibility: hidden; opacity: 0;">
						<img src="<?php echo $custom_fields->image8; ?>">
						<!--<img height="360" width="480" alt="image" src="http://juverman.narod.ru/slideGallery/Assets/images/img1.jpg">
						<div class="title">Image description 1</div>-->
					</li>
					<?php endif; ?>
				</ul>
				<div class="control" style="top: -40px;">
					<a class="start" href="#">play</a>
					<a class="stop" href="#">pause</a>
				</div>
				<a class="prev" href="#" style="left: -50px;">prev</a>
				<a class="next" href="#" style="right: -50px;">next</a>
			</div>
			<ul class="thumbs">
				<?php if ($custom_fields->image5): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image5;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
				<?php if ($custom_fields->image6): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image6;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
				<?php if ($custom_fields->image7): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image7;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
				<?php if ($custom_fields->image8): ?>
					<li><a href="javascript:;" class=""><img height="89" width="120" alt="image" src="<?php echo $custom_fields->image8;?>"><span>&nbsp;</span></a></li>
				<?php endif;?>
			</ul>
		</div>	
	
<script src="http://juverman.narod.ru/slideGallery/Source/slideGallery.js"></script>
<script>
var thumns = $$(".thumbs li a");
var gallery6 = new fadeGallery($$(".gallery6"), {
	speed: 500,
	autoplay: true,
	duration: 2000,
	onStart: function() {
		thumns.removeClass("active");
		thumns[this.current].addClass("active");
	},
	onPlay: function() { this.fireEvent("start");	}
});
thumns.each(function(el, i) {
	el.addEvent("click", function() {
		thumns.removeClass("active");
		this.addClass("active");
		gallery6.current = i;
		gallery6.play(true);
		return false;
	});
});
var buttonPanel = gallery6.holder.getElement(".control");
gallery6.holder.addEvent("mouseenter", function() {
	buttonPanel.tween("top", 0);
	gallery6.prev.tween("left", 10);
	gallery6.next.tween("right", 10);
});
gallery6.holder.addEvent("mouseleave", function() {
	buttonPanel.tween("top", -40);
	gallery6.prev.tween("left", -50);
	gallery6.next.tween("right", -50);
});
</script>
	
    <span>
        <img src="<?php echo $custom_fields->image1; ?>">
    </span>

    <?php echo $this->item->text; ?>
	<pre><?php print_r($this->item);?></pre>
	<pre><?php print_r($this->item->custom_fields);?></pre>
	<pre><?php echo $this->params->get('image1');?></pre>

</div>