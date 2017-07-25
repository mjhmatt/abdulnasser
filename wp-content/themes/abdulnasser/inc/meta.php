<?php
function abdul_register_meta_boxes( $meta_boxes )
{

	$meta_boxes[] = array(
			'title' => 'Join Team Url',
			'pages' => array( 'page' ),
			'priority' => 'high',
			'include' => array(
			'template' => array( 'template-team.php' ),
		),
			'fields' => array(
				array(
					'name' => 'Join the Team',
					'desc' => 'Enter the url for joining the team.',
					'id' => 'team_url',
					'type' => 'text',
				)
			),
			'custom'=>'wahey'
		);

	$meta_boxes[] = array(
		'title' => 'Stats',
		'pages' => array( 'page' ),
		'include' => array(
			'template' => array( 'template-home.php' ),
		),
		'priority' => 'high',
		'fields' => array(
			array(
				'name' => 'Header Image Title',
				'id' => 'header-image-title',
				'type' => 'text',
			),
			array(
				'name' => 'Stat 1 Title',
				'id' => 'stat-title-one',
				'type' => 'text',
			),
			array(
				'name' => 'Stat 1 Description',
				'id' => 'stat-desc-one',
				'type' => 'text',
			),
			array(
				'name' => 'Stat 2 Title',
				'id' => 'stat-title-two',
				'type' => 'text',
			),
			array(
				'name' => 'Stat 2 Description',
				'id' => 'stat-desc-two',
				'type' => 'text',
			),

			array(
				'name' => 'Stat 3 Title',
				'id' => 'stat-title-three',
				'type' => 'text',
			),
			array(
				'name' => 'Stat 3 Description',
				'id' => 'stat-desc-three',
				'type' => 'text',
			),
			array(
				'name' => 'Media Pack',
				'id' => 'media-pack',
				'type' => 'file_input',
			),
		),
	);





	$meta_boxes[] = array(
		'title' => 'Work',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Feature',
				'id' => 'home_feature',
				'type' => 'checkbox_list',
				'options' => array('1' => 'Feature on Home Page', '2' => 'Feature on Work Page',),
			),
			// array(
			// 	'name' => 'Video',
			// 	'desc' => 'Please paste YouTube or Vimeo link',
			// 	'id' => 'about_video',
			// 	'type' => 'text',
			// ),
			// array(
			// 	'name' => 'Social Post',
			// 	'desc' => 'Please paste link to the post on social media if you want this to link out',
			// 	'id' => 'social_post',
			// 	'type' => 'text',
			// ),
		),
	);

	$meta_boxes[] = array(
		'title' => 'Item 1',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_1_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 1',
				'id' => 'image_1',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 1 Title',
				'id' => 'image_1_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 1 Text',
				'id' => 'image_1_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 2',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_2_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image',
				'id' => 'image_2',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 2 Title',
				'id' => 'image_2_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 2 Text',
				'id' => 'image_2_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 3',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_3_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 3',
				'id' => 'image_3',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 3 Title',
				'id' => 'image_3_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 3 Text',
				'id' => 'image_3_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 4',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_4_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 4',
				'id' => 'image_4',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 4 Title',
				'id' => 'image_4_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 4 Text',
				'id' => 'image_4_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 5',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_5_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 5',
				'id' => 'image_5',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 5 Title',
				'id' => 'image_5_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 5 Text',
				'id' => 'image_5_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 6',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_6_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 6',
				'id' => 'image_6',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 6 Title',
				'id' => 'image_6_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 6 Text',
				'id' => 'image_6_text',
				'type' => 'text',
			),

		)

	);	


	$meta_boxes[] = array(
		'title' => 'Item 7',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_7_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 7',
				'id' => 'image_7',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 7 Title',
				'id' => 'image_7_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 7 Text',
				'id' => 'image_7_text',
				'type' => 'text',
			),

		)

	);	


	$meta_boxes[] = array(
		'title' => 'Item 7',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_7_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 7',
				'id' => 'image_7',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 7 Title',
				'id' => 'image_7_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 7 Text',
				'id' => 'image_7_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 8',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_8_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 8',
				'id' => 'image_8',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 8 Title',
				'id' => 'image_8_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 8 Text',
				'id' => 'image_8_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 9',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_9_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 9',
				'id' => 'image_9',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 9 Title',
				'id' => 'image_9_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 9 Text',
				'id' => 'image_9_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Item 10',
		'pages' => array('work'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Video',
				'desc' => 'Please paste YouTube or Vimeo link (note, this will show instead of this item`s image on the work details page.',
				'id' => 'image_10_video',
				'type' => 'text',
			),
			array(
				'name' => 'Image 10',
				'id' => 'image_10',
				'type' => 'image_advanced',
				'max_file_uploads' => 1
			),

			array(
				'name' => 'Image 10 Title',
				'id' => 'image_10_title',
				'type' => 'text',
			),

			array(
				'name' => 'Image 10 Text',
				'id' => 'image_10_text',
				'type' => 'text',
			),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Calendar Info',
		'pages' => array('calendar'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Location',
				'desc' => 'Enter location of event',
				'id' => 'location',
				'type' => 'text',
			),
			array(
				'name' => 'Date',
				'id' => 'event_date',
				'type' => 'date',
			),
			array(
                'name' => 'Related Article',
                'desc' => 'This will link to an article',
                'id' => 'related_article',
                'type' => 'post',
                'post_type' => array('work','news-press,post'),
                'field_type' => 'select_advanced',
                'placeholder' => 'Select work',
                'query_args' => array(
                    'posts_per_page' => - 1,
                )
            ),

		)

	);	

	$meta_boxes[] = array(
		'title' => 'Channel Info',
		'pages' => array('channel'),
		'priority' => 'high',
		'fields' => array(	
			array(
				'name' => 'Youtube Video',
				'desc' => 'Enter Youtube URL ID',
				'id' => 'channel_video',
				'type' => 'text',
			),

		)

	);	



$meta_boxes[] = array(
		'title' => 'Work Slider',
		'pages' => array('Work Slider'),
		'priority' => 'high',
		'fields' => array(
			array(
                'name' => 'Related Work',
                'desc' => 'This will link to the work details page of the specific post',
                'id' => 'related_work',
                'type' => 'post',
                'post_type' => 'work',
                'field_type' => 'select_advanced',
                'placeholder' => 'Select work',
                'query_args' => array(
                    'posts_per_page' => - 1,
                )
            ),

		),
	);


	return $meta_boxes;
}



add_filter( 'rwmb_meta_boxes', 'abdul_register_meta_boxes' );
