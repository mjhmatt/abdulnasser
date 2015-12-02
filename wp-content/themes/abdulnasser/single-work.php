<?php get_header(); ?>
 

	<?php for($i=1; $i<6; $i++) { ?>

		<?php $file = rwmb_meta('image_'.$i,'type=file'); ?>
		<?php $file = array_shift($file); ?>	
		<div class="" style="background-image:url(<?php echo $file["url"];?>); width:500px; height:500px;">
			<div class="">
				<p><?php echo rwmb_meta('image_'.$i.'title'); ?></p>
				<p><?php echo rwmb_meta('image_'.$i.'_text'); ?></p>
			</div>
		</div>

		<?php $i++;?>
	<?php } ?>

<!-- end custom related loop, isa -->

 <?php get_footer(); ?>
