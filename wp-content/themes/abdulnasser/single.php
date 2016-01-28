<?php get_header(); ?>
<div class="clear inside-press">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<div class="background-feature" style="background-image:url(<?php echo $url;?>);"></div>
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

	<?php endwhile; ?>

	<?php endif; ?>



	<div class="related-posts clear">
		<div class="clear">
			<h3>Other stories</h3>
		</div>
		<?php
		    $orig_post = $post;
		    global $post;
		    $tags = wp_get_post_tags($post->ID);
		     
		    if ($tags) {

			    $tag_ids = array();
			   
			    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				    $args=array(
					    'tag__in' => $tag_ids,
					    'post__not_in' => array($post->ID),
					    'posts_per_page'=>2, // Number of related posts to display.
					    'caller_get_posts'=>1
				    );
			     
			    $my_query = new wp_query( $args );
			 
			    while( $my_query->have_posts() ) {
				    $my_query->the_post();
			    ?>
		     
		    	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		        <a rel="external" href="<? the_permalink()?>" style="background-image:url(<?php echo $url;?>);">
		        	<span><?php the_title(); ?></span>
		        </a>
		     
		   		<?php }
		    }
		    $post = $orig_post;
		    wp_reset_query();
		    ?>
	</div>
</div>

<?php get_footer(); ?>
