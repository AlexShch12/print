<?php get_header(); ?>
<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post-main">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_time('j.m.Y'); ?>)</span></h1>
		<div class="post">
			<?php the_post_thumbnail('full', 'class=imgstyle'); ?>
			<?php the_excerpt(); ?>
			<p><a href="<?php the_permalink(); ?>">Читать далее</a></p>
			<p><?php the_tags(); ?></p>
		</div>
	</div>

	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>

