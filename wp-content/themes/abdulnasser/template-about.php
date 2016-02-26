<?php

/**
 * Template Name: About
 */

get_header();

	?>

	
<div class="clear inside-press about">

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<!-- article -->
		<div class="article" id="post-<?php the_ID(); ?>" >

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<?php echo get_the_content(); // Dynamic Content ?>

		</div>
		<!-- /article -->





</div>

<?php get_footer(); ?>

