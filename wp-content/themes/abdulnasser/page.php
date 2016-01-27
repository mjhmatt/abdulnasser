<?php get_header(); ?>

<div class="clear">

<ul>
	<?php

	$args = array( 'posts_per_page' => -1 );

	$myposts = get_posts( $args );
	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<li>	
			<?php the_date();?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?> <?php the_excerpt();?></a>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</a>

		</li>
	<?php endforeach; 
	wp_reset_postdata();?>≠

</ul>

</div>

<?php get_footer(); ?>
