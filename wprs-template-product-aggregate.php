/*
	Filter Box Template output for the WordPress Rich Snippets plugin.
	This function will display Editor/User rating on the same Box
	For review tyoe: Aggrgate
	http://authorhreview.com
*/

add_filter('wprs_template_product_aggregate','my_template_product_aggregate');

function my_template_product_aggregate() {
	
	global $post;
    	
	// define $box
	$box = '';
	
	// get box settings
	$template = wprs_template();
	
	
	// tabs
	$box .= '<div id="wprs_nav_tabs" class="wprs_container container-fluid">';
		$box .= '<div class="row">';
			$box .= '<div id="wprs_square">';
				$box .= $template['nav_tabs'];
			$box .= '</div>';
		$box .= '</div>';
	$box .= '</div>';

	// tab panes
	$box .= '<div id="wprs_nav_tabs_content" class="tab-content">';
			
	$box .= '<div class="tab-pane active" id="item_square">';
			
		$box .= '<div class="wprs_container container-fluid">';
			$box .= '<div class="row">';
		
				$box .= '<div id="wprs_square">';
			
					$box .= $template['media'];
			
					$box .= '<div class="row">';
						
						$box .= '<div class="col-xs-4 col-sm-4 col-md-4">';
							$box .= '<ul>';
								$box .= '<li><h4><span>'. __('Editor Rating', 'wprs') .'</span></h4></li>';
								$box .= '<li>'.$template['editor_star_rating_no_markup'].'</li>';
								$box .= '<li>'.$template['score_editor'].'</li>';
							$box .= '</ul>';
						$box .= '</div>';
						
						$box .= '<div class="col-xs-4 col-sm-4 col-md-4">'.$template['price'].'</div>';
					
						$box .= '<div class="col-xs-4 col-sm-4 col-md-4">';
							$box .= '<ul class="al-right">';
								$box .= '<li><h4><span>'. __('User Rating', 'wprs') .'</span></h4></li>';
								$box .= '<li>'.$template['user_star_aggregate'].'</li>';
								$box .= '<li>'.$template['score_user'].'</li>';
							$box .= '</ul">';
						$box .= '</div>';
					
					$box .= '</div>';

					$box .= '<hr />';
					
					// display Editor/User criteria
					$box .= '<div class="row">';
						$box .= '<div class="col-xs-5 col-sm-5 col-md-5">'.wprs_get_criteria($post->ID, 'editor').'</div>';
						$box .= '<div class="col-xs-2 col-sm-2 col-md-2"></div>';
						$box .= '<div class="col-xs-5 col-sm-5 col-md-5">'.wprs_get_criteria($post->ID, 'user').'</div>';
					$box .= '</div>';

					$box .= '<hr />';
					/////////////////////////
					
					$box .= '<div class="row">';
						$box .= '<div class="summary col-md-12">';
							$box .= $template['description'];
							$box .= $template['links'];
						$box .= '</div>';
					$box .= '</div>';
	
				$box .= '</div>';
		
			$box .= '</div>';
		$box .= '</div>';


	$box .= '</div>';


	$box .= '<div class="tab-pane" id="user_reviews">';
		$box .= $template['user_reviews'];
	$box .= '</div>';
		 
	$box .= '</div>';

	return $box;
	
}
