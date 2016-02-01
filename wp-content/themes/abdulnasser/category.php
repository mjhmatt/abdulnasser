<?php get_header(); ?>
<?php $categories = get_terms('category'); ?>
<?php $category = get_category( get_query_var( 'cat' ) ); ?>
<div class="cat-mobile clear mobile">
	<span class="plus-minus">+</span><span class="cat-item active" data-href="<?php echo site_url(); ?>/category/<?php echo $category->cat_name;?>"><?php echo $category->cat_name;?></span>
</div>



<div class="cat-sidebar mobile no-display">
	<div class="cat-container">
		<span class="plus-minus">–</span><a class="cat-item active" href="<?php echo site_url(); ?>/news-press">All</a>
	</div>
	<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
		<div class="cat-container">
			<a class="cat-item" href="<?php echo get_term_link($cat->name, 'category'); ?>"><?php echo $cat->name;?></a>
		</div>
	<?php } ?>
</div>


<div class="news-press">
	<div class="inside">
		<div class="clear categories">
			<?php if(count($categories) > 1) { ?>

			<div class="cat-container clear desktop">
				<a class="cat-item active left" href="<?php echo site_url(); ?>/work">All</a>

				<?php foreach($categories as $cat) if($cat->term_id != 1) { ?>
					<a class="cat-item left" href="<?php echo get_term_link($cat->name, 'category'); ?>"><?php echo $cat->name;?></a>
				<?php } ?>
			</div>

		<?php } ?>

		</div>
		<div class="clear">

			<div class="clear news-title mobile">
				News & Press
			</div>


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

