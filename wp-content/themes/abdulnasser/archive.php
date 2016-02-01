<?php get_header(); ?>



<div class="news-press">
	<div class="inside">
		<div class="clear categories">
			<li><a class="all active">All</a></li>
			<?php wp_list_categories('title_li='); ?>

		</div>
		<div class="clear">


			<div class="col span-2-of-12 sidebar">
				<ul class="months">
					<li><a class="all active">All</a></li>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

			</div>
			 
			<div class="col span-10-of-12">
				<ul class="posts">

			<?php get_template_part('loop'); ?>





				</ul>
			</div>

		</div>
	</div>
</div>


<?php get_footer(); ?>

