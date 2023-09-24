<?php
function wf_project_post_types() {
	register_post_type('slider', array(
		'supports'		=> array('title', 'excerpt', 'thumbnail'),
		/**'rewrite'		=> array('slug' => '/', 
								 'with_front' => false),**/
		'has_archive'	=> 	false,
		'public' 		=>	true,
		
		'labels' => array(
			'name' 				=> 'Slider images',
			'add_new_item'		=> 'Add new image',
			'edit_item'			=> 'Edit Image',
			'all_items'			=> 'All Images',
		),
		
		'menu_icon'	=> 'dashicons-format-gallery'		
	));
	
	register_post_type('company', array(
		'supports'		=> array('title', 'excerpt'),
		'rewrite'		=> array('slug' => 'company'),
		'has_archive'	=> 	false,
		'public' 		=>	true,
		
		'labels' => array(
			'name' 				=> 'Companies',
			'add_new_item'		=> 'Add new Company',
			'edit_item'			=> 'Edit Company',
			'all_items'			=> 'All Companies',
		),
			
	));
	
	register_post_type('our-work', array(
		'supports'		=> array('title', 'thumbnail'),
		'rewrite'		=> array('slug' => 'our-works'),
		'has_archive'	=> 	false,
		'public' 		=>	true,
		
		'labels' => array(
			'name' 				=> 'Our Works',
			'add_new_item'		=> 'Add new Work',
			'edit_item'			=> 'Edit Works',
			'all_items'			=> 'All Works',
		),
		
		'menu_icon'	=> 'dashicons-format-gallery'		
	));
}

add_action( 'init', 'wf_project_post_types' );