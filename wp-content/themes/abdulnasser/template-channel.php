<?php

/**
 * Template Name: Channel
 */

get_header();


$categories = get_terms('channel-category');
query_posts(array('post_type' => 'channel', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1));


?>

<div class="cat-mobile clear mobile">
	<span class="plus-minus">+</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/channel">All</span>
</div>


<div class="cat-sidebar mobile no-display">
	<div class="cat-container">
		<span class="plus-minus">–</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/channel">All</span>
	</div>
	<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
		<div class="cat-container">
			<a class="cat-item" href="<?php echo get_term_link($cat->name, 'channel-category'); ?>"><?php echo $cat->name;?></a>
		</div>
	<?php } ?>
</div>


<div class="inside">
	<div class="clear categories">
	<?php if(count($categories) > 1) { ?>

		<div class="cat-container clear desktop">
			<a class="cat-item active left" href="<?php echo site_url(); ?>/channel">All</a>

			<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
				<a class="cat-item left" href="<?php echo get_term_link($cat->name, 'channel-category'); ?>"><?php echo $cat->name;?></a>
			<?php } ?>
		</div>

	<?php } ?>

	</div>
	<div class="clear">
		<div class="clear channel-title mobile">
			Channel
		</div>

		<div class="col span-2-of-12 sidebar">
			<ul class="months">
				<li><a class="all active">All</a></li>
				<?php add_filter( 'get_archives_link', 'get_archives_channel_link', 10, 2 ); ?>
				<?php  wp_get_archives(array( 'post_type' => 'channel', 'type' => 'monthly' )); ?>
			</ul>

		</div>
		 
		<div class="col span-10-of-12">
			<ul class="posts">
				<?php


				while(have_posts()) {		
					the_post(); ?>

					<a class="single-post clear" href="<?php the_permalink(); ?>">	
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?> 
						<span class="right right-content" style="background-image:url('<?php echo $url;?>');">
						</span>
						<span class="left content-area">
							<span class="date"><?php the_date();?></span>
							<span class="title"><?php the_title();?></span>
							<span class="excerpt2"><?php html5wp_excerpt();?></span>
						</span>

							

					</a>


				<?php } 
				wp_reset_postdata();?>

			</ul>
		</div>

	</div>
</div>
<?php get_footer();	