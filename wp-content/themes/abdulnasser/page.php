<?php get_header(); ?>
<?php $categories = get_terms('category'); ?>

<div class="cat-mobile clear mobile">
	<span class="plus-minus">+</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/news-press">All</span>
</div>



<div class="cat-sidebar mobile no-display">
	<div class="cat-container">
		<span class="plus-minus">–</span><a class="cat-item active" href="<?php echo site_url(); ?>/work">All</a>
	</div>
	<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
		<div class="cat-container">
			<a class="cat-item" href="<?php echo get_term_link($cat->name, 'category'); ?>"><?php echo $cat->name;?></a>
		</div>
	<?php } ?>
</div>


<div class="inside">
	<div class="clear categories">
		<?php if(count($categories) > 1) { ?>

		<div class="cat-container clear desktop">
			<a class="cat-item active left" href="<?php echo site_url(); ?>/work">All</a>

			<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
				<a class="cat-item left" href="<?php echo get_term_link($cat->name, 'category'); ?>"><?php echo $cat->name;?></a>
			<?php } ?>
		</div>

	<?php } ?>

	</div>
	<div class="clear">
		<div class="clear news-title mobile">
			News & Press	
		</div>

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
