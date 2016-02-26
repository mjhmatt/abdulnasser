<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<a class="single-post clear" href="<?php the_permalink(); ?>">	
			<span class="right right-content" style="background-image:url('<?php echo $url;?>');">
				
			</span>
			<span class="left content-area">
				<span class="date"><?php the_date();?></span>
				<span class="title"><?php the_title();?></span>
				<span class="excerpt2"><?php html5wp_excerpt();?></span>
			</span>

			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?> 

		</a>

<?php endwhile; ?>

<?php else: ?>
<?php endif; ?>
