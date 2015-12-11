<?php get_header(); ?>
 
<div class="caro-holder">
	<ul>
	<?php for($i=1; $i<6; $i++) { ?>

			<?php $file = rwmb_meta('image_'.$i,'type=file'); ?>
			<?php $file = array_shift($file); ?>	
				<li>
					<div class="caro-contain" style="<?php echo rwmb_meta('image_'.$i.'_video') ? 'display:block;' : '';?>">

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

		<?php } ?>
	</ul>
</div>	

 <?php get_footer(); ?>
