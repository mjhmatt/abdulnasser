<?php

/**
 * Template Name: Calendar
 */

get_header();
?>

<?php 
	if(isset($_GET['date']))
		$year = $_GET['date']; 
	else 
		$year=2016;

?>
<?php if($year==2012)
		query_posts(array('post_type' => 'calendar', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1,'meta_query' => array(array('key' => 'event_date','value'=>array('1980-01-01','2012-12-31'),'compare'=>'BETWEEN'))));
	 else 
	 	query_posts(array('post_type' => 'calendar', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1,'meta_query' => array(array('key' => 'event_date','value'=>array($year.'-01-01',$year.'-12-31'),'compare'=>'BETWEEN'))));
?>

<?php $url = strtok($_SERVER["REQUEST_URI"],'?');?>
<div class="clear">

	<div class="col span-2-of-12 sidebar">
		<ul>
			<li>
				<a href="<?php echo $url;?>?date=2016" class="<?php echo $year==2016 ? 'active' : ''; ?> ">2016</a>
			</li>
			<li>
				<a href="<?php echo $url;?>?date=2015" class="<?php echo $year==2015 ? 'active' : ''; ?> ">2015</a>
			</li>
			<li>
				<a href="<?php echo $url;?>?date=2014" class="<?php echo $year==2014 ? 'active' : ''; ?> ">2014</a>
			</li>
			<li>
				<a href="<?php echo $url;?>?date=2013" class="<?php echo $year==2013 ? 'active' : ''; ?> ">2013</a>
			</li>
			<li>
				<a href="<?php echo $url;?>?date=2012" class="<?php echo $year==2012 ? 'active' : ''; ?> ">2012-2000</a>
			</li>

		</ul>	
	</div>

	<div class="col span-10-of-12 list">
		
		<ul>
			<?php while(have_posts()) {?>
				<li class="clear calendar-info">
					<?php the_post();?>
					<span class="clear">
						
						<span class="date"><?php echo rwmb_meta('event_date');?></span>
						<span class="title"><?php echo get_the_title();?></span>	
						<span><?php echo rwmb_meta('location');?></span>
						<span class="right plus">+</span>
					
					</span>

				</li>
					
					<span class="related-posts clear">
					
						<?php

						    $orig_post = $post;
						    global $post;
						    $tags = wp_get_post_tags($post->ID);
						     
						    if ($tags) {
							    $tag_ids = array();
							    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
							    $args=array(
							    	'tag__in' => $tag_ids,
								    'post__not_in' => array($post->ID),
								    'posts_per_page'=>4, // Number of related posts to display.
								    'caller_get_posts'=>1
								    );
								     
							    $my_query = new wp_query( $args );
							 
							    while( $my_query->have_posts() ) {
							    	$my_query->the_post();   ?>
							     	
							     	<li class="clear">
											 <a rel="external" class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											 <img class="right arrow" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
									</li>
							     
							    <?php }
						    }

						    $post = $orig_post;
					    ?>

					</span>    

				
					
			<?php } ?>

		</ul>
	</div>

</div>