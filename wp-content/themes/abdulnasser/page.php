<?php get_header(); ?>


<div class="inside">
	<div class="clear categories">
		<li><a class="all active">All</a></li>
		<?php wp_list_categories('title_li='); ?>

	</div>
	<div class="clear">


		<div class="col span-2-of-12 sidebar">
			<ul class="months">
				<li><a class="all active">All</a></li>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>

		</div>
		 
		<div class="col span-10-of-12">
			<ul class="posts">
				<?php

				$args = array( 'posts_per_page' => -1 );

				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<a class="single-post clear" href="<?php the_permalink(); ?>">	
						<span class="left content-area">
							<span class="date"><?php the_date();?></span>
							<span class="title"><?php the_title();?></span>
							<span class="excerpt2"><?php html5wp_excerpt();?></span>
						</span>

						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?> 
						<span class="right right-content" style="background-image:url('<?php echo $url;?>');">
							
						</span>

					</a>


				<?php endforeach; 
				wp_reset_postdata();?>

			</ul>
		</div>

	</div>
</div>

<?php get_footer(); ?>
