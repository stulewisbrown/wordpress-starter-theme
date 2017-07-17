<?php 
function wpb_postsbycategory() {
	// the query
	$the_query = new WP_Query( array( 'category_name' => 'doing-better-business', 'posts_per_page' => 10 ) ); 

	// The Loop
	if ( $the_query->have_posts() ) {
		
		$string = '<div class="list-group media hs-sidebar">';
		$page_id = get_queried_object_id();

		while ( $the_query->have_posts() ) {
			
			$the_query->the_post();

			$post_id = get_the_ID();

			if ( get_field('icon', $post_id ) ) {

				if ($page_id == $post_id ) {
					$active_check = ' active';
				} else {
					$active_check = '';
				}
				
				
				$icon = get_field('icon' , $post_id);
				$icon_src = content_url('uploads/icons/') . $icon . "-icon.png";
				$image_thumb = "<img class=\"hs-sidebar__thumb d-flex\" src=\"" . $icon_src . "\" />";
				$string .= '<a href="' . get_the_permalink() .'" class="list-group-item hs-sidebar__item' . $active_check . '" rel="bookmark">' . $image_thumb . "<div class=\"media-body\">" . get_the_title() .'</div></a>';
			} else { 
				// if no featured image is found
				$string .= '<a href="' . get_the_permalink() .'" class="list-group-item hs-sidebar__item' . $active_check . '" rel="bookmark">' . "<div class=\"media-body\">" . get_the_title() .'</div></a>';
			}
		}
	} else {
		// no posts found
	}
	$string .= '</div>';

	echo $string;

	/* Restore original Post Data */
	wp_reset_postdata();
}
// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

