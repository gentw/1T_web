<?php


//Include R Debug

//require( dirname(__FILE__) . '/lib/r-debug.php' );

function wf_project_scripts() {
	wp_enqueue_style('project-main-css', get_stylesheet_uri());
	wp_enqueue_script('project-main-js', get_theme_file_uri('/js/bundled.js'));
}
add_action('wp_enqueue_scripts', 'wf_project_scripts');


function wf_project_features() {
	add_theme_support('post-thumbnails');
	add_image_size('wf_slider_image', 1000, 0, true);
	add_image_size('wf_our_works_image', 400, 0, true);
}
add_action('after_setup_theme', 'wf_project_features');

if(is_page('home')) {
	add_filter( 'body_class', function( $classes ) {
	    	return array_merge( $classes, array( 'body-index' ) );
	   
	} );
}




function dealWithSlider() {	
	$slider = new WP_Query(
		array(
		'posts_per_page' => 3,
		'post_type'		 => 'slider',
		'orderby'		 => 'ID',
		'order'			 => 'DESC'
		)
	);
	$mainArray = array();
	$sliderArray = array();
	while($slider->have_posts()) {
		
		$slider->the_post();
		$id 		= get_the_ID();
		$title 		= get_the_title();
		$excerpt 	= get_the_excerpt(); 
		$image 		= get_the_post_thumbnail_url(get_the_ID(), 'wf_slider_image');
		
		$sliderArray['id'] = $id;
		$sliderArray['title'] = $title;
		$sliderArray['excerpt'] = $excerpt;
		$sliderArray['image'] = $image;

		array_push($mainArray, $sliderArray);
	}	

	$maxId = sliderFindMaxId($mainArray);
	
	$sliderResults = array(
		'max_id'=> $maxId,
		'slider_info' => $mainArray
	);

	return $sliderResults;
	//showSlider($mainArray, $maxId);
}

function sliderFindMaxId(array $mainArray) {
	$tempId = 0;
	$maxId = 0;

	// Find Max ID
	foreach($mainArray as $k => $v) {
		$id = $v['id'];

		if($tempId = 0 || $maxId < $id) {
			$tempId = $id;
			$maxId = $tempId;
		}
	}
	return $maxId;	
}

/*function showSlider(array $mainArray, $maxId) {

		foreach($mainArray as $k => $v) {
			$id = $v['id'];
			$title = $v['title'];
			$excerpt = $v['excerpt'];
			$image = $v['image'];
		?>

		<div class="slide carousel-item <?php if($maxId == $id){echo "active";}?>">
					<div class="slide__image" style="background-image: url(<?php echo $image; ?>);"></div>
					<div class="slide__content container-fluid">
						<div class="slide__text">
							<h1 class="slide__text-header"><?php echo $title; ?></h1>
							<p class="slide__text-paragraph"><?php echo $excerpt; ?></p>
							<a class="btn btn--slider" href="#">Our Work</a>
						</div>
						<div class="slide__number">1<span class="slide__number-limit">/3</span></div>
					</div><!-- slide-content -->
				</div><!-- slide -->

		<?php
	}
	
}*/

add_filter( 'manage_slider_posts_columns', 'smashing_filter_posts_columns' );
function smashing_filter_posts_columns( $columns ) {
  $columns['image'] = __( 'Image' );
  return $columns;
}

add_action( 'manage_slider_posts_custom_column', 'wf_slider_column', 10, 2);
function wf_slider_column( $column, $post_id ) {
  // Image column
  if ( 'image' === $column ) {
    echo '<a href="  ' . get_admin_url() . 'post.php?post='. get_the_ID() .'&action=edit">' . get_the_post_thumbnail( $post_id, array(80, 80) ) . '</a>';
  }
}
?>