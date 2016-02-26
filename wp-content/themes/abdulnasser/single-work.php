<?php get_header(); ?>


<div class="cat-mobile clear mobile">
	<a class="" href="<?php echo site_url(); ?>/work">BACK TO WORK</a>
</div>



	<div class="clear">
		<div class="clear next-prev desktop">
			
			<?php
			$prev_post = get_previous_post();
			if($prev_post) {
			   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
			   echo '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">Previous Work</a>';
			}

			$next_post = get_next_post();
			if($next_post) {
			   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
			   echo '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">Next Work</a>';
			}
		?>


		</div>
	</div>

		<div>
	
		<div class="caro-holder">
			<ul>


			<?php for($i=1; $i<11; $i++) { ?>
					<?php $file = rwmb_meta('image_'.$i,'type=file'); ?>
					<?php $file = array_shift($file); ?>	
					<?php if(rwmb_meta('image_'.$i.'_video')!=null || $file["url"]!=null){ ?>
						<li>
							<div class="caro-contain" style="<?php echo rwmb_meta('image_'.$i.'_video') ? 'display:block; width:75%;' : '';?>">

								<?php if (rwmb_meta('image_'.$i.'_video')){ ?>

									<?php echo rwmb_meta('image_'.$i.'_video');?>

								<?php } else { ?>
									<img class="caro-el" src="<?php echo $file["url"];?>"/>
								<?php } ?>





								<div class="social-contain"><span class="plus-tag"></span><div class="sharer"><a class="addthis_button_more"></a></div></div>
								<div class="text-content no-display clear">
									<span class="cross right"></span>
									<p class="title"><?php echo rwmb_meta('image_'.$i.'_title'); ?></p>
									<p class="content"><?php echo rwmb_meta('image_'.$i.'_text'); ?></p>

								</div>
							</div>

						</li>
					<?php }	?>

				<?php } ?>
			</ul>
		</div>	
		</div>

	

 <?php get_footer(); ?>
