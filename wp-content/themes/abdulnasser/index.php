<?php get_header(); ?>

	<main role="main">
		<!-- section -->

	<div class="clear flex-slider">
		<ul class="sliders">
			<?php query_posts(array('post_type' => 'workslider', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1)); ?>


				<?php
					while(have_posts()) {		
						the_post();
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
						<li style="background-image:url('<?php echo $url;?>');">

							<span class="hover-container"><span class="hover-title"><?php echo get_the_title();?><span class="hover-subtitle"><?php echo get_the_excerpt();?></span></span> <img class="cross" src="<?php echo get_template_directory_uri(); ?>/img/cross.png" /></span>
							<span class="open">+</span>
						</li>
				<?php } ?>

		</ul>
	</div>

		<!-- /section -->
	</main>

	<?php 
		
		query_posts(array('post_type' => 'work', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1,'meta_query' => array(array('key' => 'home_feature','value'=>1))));

	?>


<div class="work-container home-container">
	<div class="clear work-title mobile">
		Work
	</div>

	<div class="clear packery">
		
		<?php
		while(have_posts()) {		
			the_post();
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>

			<a class="work-image col span-3-of-12" href="<?php echo get_permalink();?>" style="background-image:url('<?php echo $url;?>');"><span class="container"><span class="inside"><span class="hover-title"><?php echo get_the_title();?><span class="hover-subtitle"><?php echo get_the_excerpt();?></span></span></span></span></a>

		<?php } ?>

	</div>
</div>


<?php get_footer(); ?>
