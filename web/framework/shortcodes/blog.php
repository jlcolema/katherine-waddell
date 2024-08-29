<?php
function add_shortcode_blog($atts) {

	extract(shortcode_atts(array(
		'cats' => '',
	), $atts));
	$output='';
	
	$i=1;
	


	$output.="<div class='blog-posts clearfix'>";
	
	$args= array("post_type" => "post","posts_per_page" => 2, "cat" => $cats);
	query_posts($args);
	while ( have_posts() ) : the_post();
	
		if($i==1) $pos='eight alpha';
		elseif($i==2) $pos='four omega';
		else $pos='';
		$i++;
		
		$output.="<div class='columns row ".$pos."'>";
			$output.="<h3>".get_the_title()."</h3>";
			$output.="<a href='".get_permalink()."'>";
				$output.="<figure>";			
					$output.="<img class='scale-with-grid preload' src='".resize_image( get_post_thumbnail_id() ,420, 340 )."'/>";					
					$output.="<figcaption></figcaption>";	
				$output.="</figure>";	
			$output.="</a>";	
			$output.="<p class='post-excerpt'>".tf_the_excerpt_max_charlength(150)."</p>";		
			$output.="<p><a class='more' href='".get_permalink()."'>".__('Continue Reading',THEME_SLUG)."</a></p>";	
		
		$output.="</div>";
	
	
	endwhile; 
	wp_reset_query();  
	wp_reset_postdata(); 
	
	$output.="<br class='clear'>";
	
	$output.="</div>";
	

	return $output;
	
}

add_shortcode('blog-posts', 'add_shortcode_blog');
?>
