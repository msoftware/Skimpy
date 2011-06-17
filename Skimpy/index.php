<?php
/**
 * @package WordPress
 */

get_header(); ?>

				<div class="content">
<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>">
				<h2 ><a href="<?php the_permalink() ?>" title="" rel="bookmark"><?php the_title() ?></a></h2>
	<?php the_content() ?>
<br class="clr"/>
</div>
<?php comments_template() ?>

<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>