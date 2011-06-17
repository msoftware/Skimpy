<?php
/**
 * @package WordPress
 */
get_header(); ?>
	<div class="content">
		<h3><?php the_title(); ?></h3>
			<?php while ( have_posts() ) : the_post() ?>

				<?php the_content() ?>

				<?php comment_form(); ?> 
				<ul class="comments">
					<?php wp_list_comments(); ?> 
				</ul>
			<?php endwhile; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?> 