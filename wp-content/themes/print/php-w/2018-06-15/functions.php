<?php

/**
* загружаемые стили и скрипты
**/
function load_style_script(){
	wp_enqueue_script('jquery-1', get_template_directory_uri() . '/js/jquery-1.js');
	wp_enqueue_script('jquery00', get_template_directory_uri() . '/js/jquery00.js');
	wp_enqueue_script('init0000', get_template_directory_uri() . '/js/init0000.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


function todo_shortcode(){
	echo do_shortcode('[contact-form-7 id="53" title="Замовити послугу"]');
}


/**
* загружаем стили и скрипты
**/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
**/
add_theme_support('post-thumbnails');

/**
* меню
**/
register_nav_menu('menu', 'Menu-print');

/**
* сайдбар
**/
register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => 'sidebar',
	'description' => 'Здесь размещайте виджеты сайдбара',
	'before_widget' => '<div class="vidget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));

/**
* футер
**/
register_sidebar(array(
	'name' => 'Виджеты футера',
	'id' => 'footer',
	'description' => 'Здесь размещайте виджеты футера',
	'before_widget' => '<div class="menu-foot">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
));

/**
* комментарии
**/
function twentyfifteen_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}

/**
* слайдер
**/
add_action('init', 'slider');
function slider() {
	register_post_type ('slider', array(
		'public'=>true,
		'supports'=>array('title', 'thumbnail'),
		'labels'=>array(
			'name'=>'Слайдер',
			'all_items'=>'Все слайды',
			'add_new'=>'Добавить новый',
			'add_new_item'=>'Добавление слайда'

		)

	));
}

?>