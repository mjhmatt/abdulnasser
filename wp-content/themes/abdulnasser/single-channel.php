<?php get_header(); ?>

<div class="cat-mobile clear mobile">
	<a class="" href="<?php echo site_url(); ?>/channel">BACK TO CHANNEL</a>
</div>



<div class="clear about inside-press">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<!-- <div class="background-feature" style="background-image:url(<?php //echo $url;?>);"></div> -->
		<!-- article -->
		<div class="article" id="post-<?php the_ID(); ?>" >
		<?php if(!empty(rwmb_meta('channel_video'))){ ?>
			<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='http://www.youtube.com/embed/<?php echo rwmb_meta('channel_video');?>' frameborder='0' allowfullscreen></iframe></div>
		<?php } else { ?>

			<img src="<?php echo $url;?>" alt="main-image" class="main-image" />

		<?php } ?>
			
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
