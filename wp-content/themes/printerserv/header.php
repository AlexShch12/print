<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php bloginfo('name'); wp_title(); ?></title>

	<?php wp_head(); ?>
</head>

<body>
<div class="main">	
	<div class="head">
		<div class="head-time"><?php echo date_i18n('l j F Y'); ?></div>
		<div class="logo-prt">
			<a href="<?php echo home_url();?>"> <img src="<?php bloginfo('template_url');?>/images/prt_logo.jpg"> </a>
		</div>

	 	<div class="text-tel">
			<p> Телефони для зв'язку:</p>		
			<div class="text-tel-num">
				<p> 09_XXX-XX-XX</p>
				<p> 09_XXX-XX-XX</p>
			</div>	
		</div>

		<div class="call_back"><a class="fancybox-inline" href="#form_pop_up" style='text-decoration: none;'>Замовити послугу</a></div>
		<div class="fancybox-hidden" style="display: none;">
			<div id="form_pop_up"><?php echo do_shortcode( '[contact-form-7 id="53" title="Замовити послугу"]' ); ?>
			</div>
			<a class="fancybox-close" href="#form_pop_up">cloooooose</a>
		</div>

		<form class="search-main" action="" method="">
			<input class="search-txt" type="text" name="s" />
			<input class="search-btn" type="image" src="<?php bloginfo('template_url') ?>/images/search-btn.jpg" />
		</form>

	</div>
	<!-- </div> --> 

	<div class="content-main">

		<?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false)); ?>

		<!--
		<?php $slider = new WP_Query(array('post_type'=>'slider', 'posts_per_page'=> -1)); ?>	
		<div id="slider">
			<ul id="cycle">

			<?php if ( $slider->have_posts() ) : ?> 

			<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
				<!-- post --
				<li><?php the_post_thumbnail('full'); ?></li>

			<?php endwhile; ?>
			<!-- post navigation --
			</ul>
			<div id="cyclePager"></div>

			<?php else: ?>
			<!-- no posts found --
			<p>Место под слайдер</p>
			<?php endif; ?>
		</div>
		<?php wp_reset_query(); ?>
		-->

		<!--
		<div id="slider">
			<ul id="cycle">
				<li><img src="<?php bloginfo('template_url') ?>/images/galery.jpg" height="266" width="927" alt="Slides" /></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/kolizey.jpg" height="266" width="927" alt="Slides" /></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/piramide.jpg" height="266" width="927" alt="Slides" /></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/galery.jpg" height="266" width="927" alt="Slides" /></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/kolizey.jpg" height="266" width="927" alt="Slides" /></li>
				<li><img src="<?php bloginfo('template_url') ?>/images/piramide.jpg" height="266" width="927" alt="Slides" /></li>
			</ul>
		<div id="cyclePager"></div>
		-->
	<!-- </div>	 -->
<!-- </div> -->
