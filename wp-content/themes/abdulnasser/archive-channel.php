<?php get_header(); 

$categories = get_terms('channel-category');
query_posts(array('post_type' => 'channel', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1));


?>

<div class="channel">

	<div class="cat-mobile clear mobile">
		<span class="plus-minus">+</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/channel">All</span>
	</div>


	<div class="cat-sidebar mobile no-display">
		<div class="cat-container">
			<span class="plus-minus">–</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/channel">All</span>
		</div>
		<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
			<div class="cat-container">
				<span class="cat-item" data-href="<?php echo get_term_link($cat->name, 'channel-category'); ?>"><?php echo $cat->name;?></span>
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

					<?php get_template_part('loop'); ?>

				</ul>
			</div>

		</div>
	</div>
</div>



<?php get_footer(); ?>

