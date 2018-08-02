<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<h1><?php bloginfo('name'); ?></h1>
	<?php bloginfo('description'); ?>
	<br>
	<a href="<?php echo home_url(); ?>">Главная страница</a>
	<br>
	<?php bloginfo('template_url'); ?>
	<br>
	<?php bloginfo('stylesheet_url'); ?>

	<hr>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Читать далее...</a>


	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>















</body>
</html>




