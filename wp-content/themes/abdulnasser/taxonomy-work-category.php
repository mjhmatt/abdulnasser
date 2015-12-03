<?php

/**
 * Template Name: Work
 */

get_header();

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

$categories = get_terms('work-category');
query_posts(array('post_type' => 'work', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1,'work-category'=>$term->name));

?>
<div class="work-container">
	<?php if(count($categories) > 1) { ?>

		<div class="cat-container clear desktop-only">
			<span class="cat-item left active" data-href="<?php echo site_url(); ?>/work">All</span>

			<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
				<span class="cat-item left" data-href="<?php echo get_term_link($cat->name, 'work-category'); ?>"><?php echo $cat->name;?></span>
			<?php } ?>
		</div>

	<?php } ?>

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


		
		
		<?php if (strpos(rwmb_meta('about_video'),'youtube') !== false) { ?>
			<?php preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", rwmb_meta('about_video'), $matches);?>
	 		   <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
	 		   <div class='embed-container'><iframe src='<?php echo rwmb_meta('about_video');?>' frameborder='0' allowfullscreen></iframe></div>
		<?php } else { ?>
				<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
				<iframe src='<?php echo rwmb_meta('about_video');?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		<?php } ?>

	</div>
</div>
<?php get_footer();	