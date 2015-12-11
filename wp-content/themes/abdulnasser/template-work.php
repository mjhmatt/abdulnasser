<?php

/**
 * Template Name: Work
 */

get_header();


$categories = get_terms('work-category');
query_posts(array('post_type' => 'work', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1));

?>


<div class="cat-mobile clear mobile">
	<span class="plus-minus">+</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/work">All</span>
</div>


<div class="cat-sidebar mobile no-display">
	<div class="cat-container">
		<span class="plus-minus">–</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/work">All</span>
	</div>
	<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
		<div class="cat-container">
			<span class="cat-item" data-href="<?php echo get_term_link($cat->name, 'work-category'); ?>"><?php echo $cat->name;?></span>
		</div>
	<?php } ?>
</div>

<div class="work-container">
	<?php if(count($categories) > 1) { ?>

		<div class="cat-container clear desktop">
			<span class="cat-item active left" data-href="<?php echo site_url(); ?>/work">All</span>

			<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
				<span class="cat-item left" data-href="<?php echo get_term_link($cat->name, 'work-category'); ?>"><?php echo $cat->name;?></span>
			<?php } ?>
		</div>

	<?php } ?>

	<div class="clear work-title mobile">
		Work
	</div>

	<div class="clear packery">
		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			
			<a class="work-image col span-3-of-12" href="<?php echo get_permalink();?>" style="background-image:url('<?php echo $url;?>');">


			</a>

		<?php } ?>


		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			
			<a class="work-image col span-3-of-12" style="background-image:url('<?php echo $url;?>');">


			</a>

		<?php } ?>

		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			
			<a class="work-image col span-3-of-12" style="background-image:url('<?php echo $url;?>');">


			</a>

		<?php } ?>

		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			
			<a class="work-image col span-3-of-12" style="background-image:url('<?php echo $url;?>');">


			</a>

		<?php } ?>

		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			
			<a class="work-image col span-3-of-12" style="background-image:url('<?php echo $url;?>');">


			</a>

		<?php } ?>

		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			
			<a class="work-image col span-3-of-12" style="background-image:url('<?php echo $url;?>');">


			</a>

		<?php } ?>



	</div>
</div>
<?php get_footer();	