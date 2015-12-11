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

	</div>
</div>
<?php get_footer();	