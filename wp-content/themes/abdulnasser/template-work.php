<?php

/**
 * Template Name: Work
 */

get_header();

$categories = get_terms('work-category');
query_posts(array('post_type' => 'work', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1));
var_dump($categories);

?>
<?php if(count($categories) > 1) { ?>

	<div class="cat-container clear desktop-only">
		<a class="cat-item left active" href="<?php echo site_url(); ?>/work">Show all</a>

		<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
			<a class="cat-item left" href="<?php echo get_term_link($cat->name, 'work-category'); ?>"><?php echo $cat->name;?></a>
		<?php } ?>
	</div>

<?php } ?>

<div class="clear">
	<?php
	while(have_posts()) {		
		the_post();
		$image_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>	

		<div class="about-section clear <?php echo $post->post_name;?>">
		
			<div class="image">

				<img src="<?php echo $image_url;?>" alt="" />

			</div>


			<div class="section clear">
			
				<div class="desc">

					<span class="title"><?php echo $post->post_title;?></span>
					<div class="content"><?php the_content();?></div>

				</div>

			</div>

		</div>

	<?php } ?>


	
	
	<?php var_dump($matches);?>
	<?php if (strpos(rwmb_meta('about_video'),'youtube') !== false) { ?>
		<?php preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", rwmb_meta('about_video'), $matches);?>
 		   <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
 		   <div class='embed-container'><iframe src='<?php echo rwmb_meta('about_video');?>' frameborder='0' allowfullscreen></iframe></div>
	<?php } else { ?>
			<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'>
			<iframe src='<?php echo rwmb_meta('about_video');?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
	<?php } ?>

<p class="back-top">
	Back to top
</p>	
<?php get_footer();	