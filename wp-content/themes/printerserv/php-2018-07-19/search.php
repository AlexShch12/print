<?php get_header(); ?>

<div class="content">
	<h2 class="page-title">Результати пошуку: </h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post-main">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span>(<?php the_time('d.m.Y'); ?>)</span></h1>
			<div class="post">
				<?php the_post_thumbnail('full', 'class=imgstyle'); ?>
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>">Читати далі...</a></p>
			</div>
		</div>

	<?php endwhile; ?>
	<div class="pagination">
		<?php
		// global $wp_query;
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text' => '&laquo;',
			'next_text' => '&raquo;'
			) );
		?>
	</div>

	<?php else: ?>
	<h4>По запиту нічого не знайдено...</h4>
	<?php endif; ?>

</div>
<?php get_sidebar(); ?>

</div>
	
<?php get_footer(); ?>
